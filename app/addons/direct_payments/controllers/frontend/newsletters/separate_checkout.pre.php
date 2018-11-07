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

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($mode == 'place_order' || $mode == 'subscribe_customer') {
        /** @var \Tygh\Addons\DirectPayments\Cart\Service $cart_service */
        $cart_service = Tygh::$app['addons.direct_payments.cart.service'];
        $cart = &$cart_service->getCart();
        
        $subscriber_id = fn_get_subscriber_id_by_email($cart['user_data']['email']);
        $subscriber_data = array(
            'email' => $cart['user_data']['email'],
            'lang_code' => CART_LANGUAGE
        );

        if (!empty($_REQUEST['mailing_lists'])) {
            $subscriber_data['list_ids'] = $_REQUEST['mailing_lists'];
        }

        fn_update_subscriber($subscriber_data, $subscriber_id);
    }

    if ($mode == 'subscribe_customer') {
        return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout');
    }
}

if ($mode == 'checkout') {

    /** @var \Tygh\Addons\DirectPayments\Cart\Service $cart_service */
    $cart_service = Tygh::$app['addons.direct_payments.cart.service'];
    $cart = &$cart_service->getCart();

    $email = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", Tygh::$app['session']['auth']['user_id']);

    if ((empty($email) || Tygh::$app['session']['auth']['user_id'] == 0) && !empty($cart['user_data']['email'])) {
        $email = $cart['user_data']['email'];
    }
    $mailing_lists = db_get_hash_array("SELECT * FROM ?:subscribers INNER JOIN ?:user_mailing_lists ON ?:subscribers.subscriber_id = ?:user_mailing_lists.subscriber_id WHERE ?:subscribers.email = ?s", 'list_id', $email);
    Tygh::$app['view']->assign('user_mailing_lists', $mailing_lists);

    list($page_mailing_lists) = fn_get_mailing_lists();
    Tygh::$app['view']->assign('page_mailing_lists', $page_mailing_lists);
}