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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fn_trusted_vars ('enities_data');
    $return_url = 'enities.manage';

    // Update features
    if ($mode == 'update') {
        $enity_id = fn_update_enities($_REQUEST['enities_data'], $_REQUEST['enity_id'], DESCR_SL);

        return array(CONTROLLER_STATUS_OK, 'enities.update?enity_id=' . $enities_id);
    }

    if ($mode == 'update_status') {

        fn_tools_update_status($_REQUEST);

        if (!empty($_REQUEST['status']) && in_array($_REQUEST['status'], array('D', 'H'), true)) {
            fn_disable_enities_filters($_REQUEST['id']);
        }

        exit;
    }

    if ($mode == 'delete') {

        if (!empty($_REQUEST['enity_id'])) {
            fn_delete_enity($_REQUEST['enity_id']);
        }

        if(!empty($_REQUEST['return_url'])) {
            $return_url = $_REQUEST['return_url'];
        }
    }

    if ($mode == 'm_delete') {
        if (!empty($_REQUEST['enity_ids'])) {
            $enity_ids = (array) $_REQUEST['enity_ids'];

            foreach ($enity_ids as $enity_id) {
                fn_delete_enity($enity_id);
            }
        }

        if(!empty($_REQUEST['return_url'])) {
            $return_url = $_REQUEST['return_url'];
        }
    }

    return array(CONTROLLER_STATUS_OK, $return_url);
}

if ($mode == 'update') {

    $enity = fn_get_enities_data($_REQUEST['enity_id'], false, false, DESCR_SL);

    if (empty($enity)) {
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    Tygh::$app['view']->assign('enity', $enity);

    $params = array(
        'enity_id' => $enity['enity_id'],
        'get_images' => true,
        'page' => !empty($_REQUEST['page']) ? $_REQUEST['page'] : 1,
        'items_per_page' => !empty($_REQUEST['items_per_page']) ? $_REQUEST['items_per_page'] : Registry::get('settings.Appearance.admin_elements_per_page'),
    );

    Tygh::$app['view']->assign('search', $search);

} elseif ($mode == 'manage') {

    $params = $_REQUEST;

    list($enities) = fn_get_enities($params, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);

    Tygh::$app['view']->assign('enities', $enities);

// fn_print_r("выход из контроллера",$enities);

    exit;
}

elseif ($mode == 'get_enities_list') {
    $page_number = isset($_REQUEST['page']) ? (int) $_REQUEST['page'] : 1;
    $page_size = isset($_REQUEST['page_size']) ? (int) $_REQUEST['page_size'] : 10;
    $search_query = isset($_REQUEST['q']) ? $_REQUEST['q'] : null;
    $lang_code = isset($_REQUEST['lang_code']) ? $_REQUEST['lang_code'] : CART_LANGUAGE;

    $search = array(
        'page' => $page_number,
        'search_query' => $search_query,
        'get_descriptions' => true,
    );

    if (isset($_REQUEST['preselected'])) {
        $search['enity_id'] = $_REQUEST['preselected'];
        $search['plain'] = true;
        $search['exclude_group'] = true;
    }

    list($enities, $search) = fn_get_enities($search, $page_size, $lang_code);

    $objects = $enities;

    Tygh::$app['ajax']->assign('objects', $objects);
    Tygh::$app['ajax']->assign('total_objects', $search['total_items']);

    exit;
}
