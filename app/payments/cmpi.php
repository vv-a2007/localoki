<?php

/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Http;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if (defined('PAYMENT_NOTIFICATION')) {

    if ($mode == 'frame' && !empty(Tygh::$app['session']['cmpi']['acs_url'])) {
        fn_create_payment_form(Tygh::$app['session']['cmpi']['acs_url'], Tygh::$app['session']['cmpi']['frame_data'], 'Card Issuer', false, 'post', false);
        exit;
    } elseif ($mode == 'bank' && !empty(Tygh::$app['session']['cmpi']['order_id'])) {
        $order_info = fn_get_order_info(Tygh::$app['session']['cmpi']['order_id']);
        $processor_data = fn_get_processor_data($order_info['payment_method']['payment_id']);
        $payment_name = str_replace('.php', '', $processor_data['processor_script']);
        Tygh::$app['session']['cmpi']['pares'] = !empty($_REQUEST['PaRes']) ? $_REQUEST['PaRes'] : '';
        $sess = Tygh::$app['session']->getName() . '=' . Tygh::$app['session']->getID();
        $src = fn_url("payment_notification.auth?payment=$payment_name&$sess", AREA, 'current');

        $msg = __('text_cc_processor_connection', array(
            '[processor]' => '3-D Secure server'
        ));

        fn_create_payment_form($src, array(), '3-D Secure', false, 'get', false, 'parent');
        exit;

    } elseif ($mode == 'auth' && !empty(Tygh::$app['session']['cmpi']['order_id'])) {
        $view = Tygh::$app['view'];
        $view->assign('order_action', __('placing_order'));
        $view->display('views/orders/components/placing_order.tpl');
        fn_flush();

        fn_cmpi_authenticate();

        if (Tygh::$app['session']['cmpi']['signature'] == 'Y' && in_array(Tygh::$app['session']['cmpi']['pares'], array('Y', 'A', 'U'))) {
            define('DO_DIRECT_PAYMENT', true);
        } else {
            Tygh::$app['session']['cmpi']['auth_error'] = true;
            fn_set_notification('E', __('authentication_failed'), __('text_authentication_failed_message'));
        }

        define('CMPI_PROCESSED', true);
        fn_start_payment(Tygh::$app['session']['cmpi']['order_id']);
        fn_order_placement_routines('route', Tygh::$app['session']['cmpi']['order_id']);

        exit();
    }
}

/**
 * Make cmpi_lookup request to 3-D Secure sevice provider
 *
 * @param array $processor_data Payment processor data
 * @param array $order_info Order information
 * @return boolean true
 */
function fn_cmpi_lookup($processor_data, $order_info, $mode = '')
{
    unset(Tygh::$app['session']['cmpi']);

    $amount = preg_replace('/\D/', '', $order_info['total']);

    // array with ISO codes of currencies. //TODO: move to database.
    $iso4217 = array (
        'USD' => 840,
        'GBP' => 826,
        'EUR' => 978,
        'AUD' => 036,
        'CAD' => 124,
        'JPY' => 392,
    );

    $settings = array('processor_id', 'merchant_id', 'transaction_password', 'transaction_url');
    foreach ($settings as $setting) {
        Tygh::$app['session']['cmpi'][$setting] = $processor_data['processor_params'][$setting];
    }

    $session = Tygh::$app['session'];

    $cardinal_request=<<<EOT
<CardinalMPI>
<MsgType>cmpi_lookup</MsgType>
<Version>1.7</Version>
<ProcessorId>{$session['cmpi']['processor_id']}</ProcessorId>
<MerchantId>{$session['cmpi']['merchant_id']}</MerchantId>
<TransactionPwd>{$session['cmpi']['transaction_password']}</TransactionPwd>
<TransactionType>C</TransactionType>
<Amount>{$amount}</Amount>
<CurrencyCode>{$iso4217[$processor_data['processor_params']['currency']]}</CurrencyCode>
<CardNumber>{$order_info['payment_info']['card_number']}</CardNumber>
<CardExpMonth>{$order_info['payment_info']['expiry_month']}</CardExpMonth>
<CardExpYear>20{$order_info['payment_info']['expiry_year']}</CardExpYear>
<OrderNumber>{$order_info['order_id']}</OrderNumber>
<OrderDesc>Order #{$order_info['order_id']}; customer: {$order_info['b_firstname']} {$order_info['b_lastname']};</OrderDesc>
<BrowserHeader>*/*</BrowserHeader>
<EMail>{$order_info['email']}</EMail>
<IPAddress>{$_SERVER['REMOTE_ADDR']}</IPAddress>
<BillingFirstName>{$order_info['b_firstname']}</BillingFirstName>
<BillingLastName>{$order_info['b_lastname']}</BillingLastName>
<BillingAddress1>{$order_info['b_address']}</BillingAddress1>
<BillingAddress2>{$order_info['b_address_2']}</BillingAddress2>
<BillingCity>{$order_info['b_city']}</BillingCity>
<BillingState>{$order_info['b_state']}</BillingState>
<BillingPostalCode>{$order_info['b_zipcode']}</BillingPostalCode>
<BillingCountryCode>{$order_info['b_country']}</BillingCountryCode>
<ShippingFirstName>{$order_info['s_firstname']}</ShippingFirstName>
<ShippingLastName>{$order_info['s_lastname']}</ShippingLastName>
<ShippingAddress1>{$order_info['s_address']}</ShippingAddress1>
<ShippingAddress2>{$order_info['s_address_2']}</ShippingAddress2>
<ShippingCity>{$order_info['s_city']}</ShippingCity>
<ShippingState>{$order_info['s_state']}</ShippingState>
<ShippingPostalCode>{$order_info['s_zipcode']}</ShippingPostalCode>
<ShippingCountryCode>{$order_info['s_country']}</ShippingCountryCode>
</CardinalMPI>
EOT;

    Registry::set('log_cut_data', array('CardNumber', 'CardExpMonth', 'CardExpYear'));
    $response_data = Http::post(Tygh::$app['session']['cmpi']['transaction_url'], array('cmpi_msg' => $cardinal_request));

    $cmpi = @simplexml_load_string($response_data);

    $err_no = 0;
    Tygh::$app['session']['cmpi']['enrolled'] = 'U';
    $acs_url = '';
    if (empty($response_data) || $cmpi === false) {
        Tygh::$app['session']['cmpi']['eci_flag'] = fn_get_payment_card($order_info['payment_info']['card_number'], array(
            'mastercard' => 1,
            'visa' => 7,
            'jcb' => 7,
        ));

        $err_desc = 'Connection problem';
    } else {
        $err_no   = intval((string) $cmpi->ErrorNo);
        $err_desc = (string) $cmpi->ErrorDesc;
        $acs_url  = (string) $cmpi->ACSUrl;

        Tygh::$app['session']['cmpi']['enrolled']       = (string) $cmpi->Enrolled;
        Tygh::$app['session']['cmpi']['transaction_id'] = (string) $cmpi->TransactionId;
        Tygh::$app['session']['cmpi']['eci_flag']       = (string) $cmpi->EciFlag;
    }

    if ($err_no == 0 && Tygh::$app['session']['cmpi']['enrolled'] == 'Y' && !empty($acs_url)) {

        $sess = Tygh::$app['session']->getName() . '=' . Tygh::$app['session']->getId();
        $payment_name = str_replace('.php', '', $processor_data['processor_script']);

        Tygh::$app['session']['cmpi']['acs_url']    = $acs_url;
        Tygh::$app['session']['cmpi']['order_id']   = $order_info['order_id'];
        Tygh::$app['session']['cmpi']['frame_data'] = array(
            'PaReq'   => (string) $cmpi->Payload,
            'TermUrl' => fn_url("payment_notification.bank?payment=$payment_name&$sess", AREA, 'current'),
            'MD'      => '',
        );

        $frame_src = fn_url("payment_notification.frame?payment=$payment_name&$sess", AREA, 'current');

        $msg = __('text_cmpi_frame_message');
        $back_link_msg = __('text_cmpi_go_back');

        $dispatch = ($mode == 'repay') ? 'orders.details?order_id=' . $order_info['order_id'] . '&' : 'checkout.checkout?';
        $back_link = fn_url($dispatch . $sess, AREA, 'current');

        echo <<<EOT
<table width="100%" cellspacing="0" cellpadding="0">
    <tr>
        <td valign="top" align="center">
            <div style="width:500px;">
                {$msg}
                <br /><br />
            </div>
        </td>
    </tr>
    <tr>
        <td valign="top" align="center">
            <iframe width="420" height="420" marginwidth="0" marginheight="0" src="{$frame_src}"></iframe><br />
            <br />
            <div>
                <a href="{$back_link}>{$back_link_msg}</a>
            </div>
        </td>
    </tr>
</table>
EOT;
        exit;
    } else {
        Tygh::$app['session']['cmpi']['err_no'][0]   = $err_no;
        Tygh::$app['session']['cmpi']['err_desc'][0] = $err_desc;

        define('DO_DIRECT_PAYMENT', true);
    }

    return true;
}

/**
 * Make cmpi_authenticate request to 3-D Secure service provider.
 *
 * @return boolean true
 */
function fn_cmpi_authenticate()
{
    $session = Tygh::$app['session'];
    $cardinal_request=<<<EOT
<CardinalMPI>
<Version>1.7</Version>
<MsgType>cmpi_authenticate</MsgType>
<ProcessorId>{$session['cmpi']['processor_id']}</ProcessorId>
<MerchantId>{$session['cmpi']['merchant_id']}</MerchantId>
<TransactionPwd>{$session['cmpi']['transaction_password']}</TransactionPwd>
<TransactionType>C</TransactionType>
<TransactionId>{$session['cmpi']['transaction_id']}</TransactionId>
<PAResPayload>{$session['cmpi']['pares']}</PAResPayload>
</CardinalMPI>
EOT;

    $response_data = Http::post(Tygh::$app['session']['cmpi']['transaction_url'], array('cmpi_msg' => $cardinal_request));

    $cmpi = @simplexml_load_string($response_data);

    if (empty($response_data) || $cmpi === false) {
        Tygh::$app['session']['cmpi']['err_no'][1]   = 0;
        Tygh::$app['session']['cmpi']['err_desc'][1] = 'Connection problem';
        Tygh::$app['session']['cmpi']['signature']   = 'N';
        Tygh::$app['session']['cmpi']['pares']       = 'N';
    } else {
        Tygh::$app['session']['cmpi']['signature']   = (string) $cmpi->SignatureVerification;;
        Tygh::$app['session']['cmpi']['pares']       = (string) $cmpi->PAResStatus;
        Tygh::$app['session']['cmpi']['eci_flag']    = (string) $cmpi->EciFlag;
        Tygh::$app['session']['cmpi']['xid']         = (string) $cmpi->Xid;
        Tygh::$app['session']['cmpi']['cavv']        = (string) $cmpi->Cavv;
        Tygh::$app['session']['cmpi']['err_no'][1]   = (string) $cmpi->ErrorNo;
        Tygh::$app['session']['cmpi']['err_desc'][1] = (string) $cmpi->ErrDesc;
    }

    return true;
}
