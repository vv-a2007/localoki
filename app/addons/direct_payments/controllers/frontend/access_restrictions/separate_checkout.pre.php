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

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

/** @var \Tygh\Addons\DirectPayments\Cart\Service $cart_service */
$cart_service = Tygh::$app['addons.direct_payments.cart.service'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'place_order') {
        if (!empty($_REQUEST['payment_info']) && !empty($_REQUEST['payment_info']['card_number'])) {
            if (fn_card_number_is_blocked($_REQUEST['payment_info']['card_number'])) {
                fn_set_notification('E', __('error'), __('text_cc_number_is_blocked', array(
                    '[cc_number]' => $_REQUEST['payment_info']['card_number'],
                )));

                return array(CONTROLLER_STATUS_REDIRECT, 'checkout.checkout');
            }
        }
    }

    if ($mode == 'update_steps' && !empty($_REQUEST['update_step']) && $_REQUEST['update_step'] != 'step_one') {
        $cart = &$cart_service->getCart();
        if (!empty($cart['user_data']) && fn_email_is_blocked($cart['user_data'])) {
            return array(CONTROLLER_STATUS_REDIRECT, 'checkout.customer_info');
        }
    }

    return;
}
