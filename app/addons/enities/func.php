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
use Tygh\Navigation\LastView;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_get_enities($params = array(), $items_per_page = 10, $lang_code = CART_LANGUAGE)
{

     $default_params = array(
         'enity_id' => 0,
         'display_on' => 'Y',
         'page' => 1,
         'items_per_page' => $items_per_page,
     );

     $params = array_merge($default_params, $params);

     $fields = "cscart_enities_descriptions.enity_id, cscart_enities_descriptions.description, cscart_enities.status";

     $condition = $join = '';

     $join .= db_quote(" LEFT JOIN cscart_enities_descriptions ON cscart_enities_descriptions.enity_id = cscart_enities.enity_id AND cscart_enities_descriptions.lang_code = ?s", $lang_code);

     $limit = '';
     if (!empty($params['items_per_page'])) {
         $params['total_items'] = db_get_field("SELECT COUNT(DISTINCT enity_id) FROM cscart_enities");
         $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
     }

     $data = db_get_array("SELECT ?p FROM cscart_enities ?p ORDER BY description ?p", $fields, $join, $limit);

     return array($data);
 }
