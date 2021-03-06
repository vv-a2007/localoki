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

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

$addons_dir = Registry::get('config.dir.addons');
Tygh::$app['class_loader']->add('Pingpp\\', $addons_dir . '/pingpp/lib');
Tygh::$app['class_loader']->add('BaconQrCode\\', $addons_dir . '/pingpp/lib');

fn_register_hooks(
    'get_payments',
    'get_payments_post'
);