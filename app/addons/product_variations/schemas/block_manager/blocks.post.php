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

use Tygh\Addons\ProductVariations\Product\Manager as ProductManager;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

require_once Registry::get('config.dir.addons') . '/product_variations/schemas/block_manager/blocks.functions.php';

$schema['products']['content']['items']['fillings']['product_variations.variations_filling'] = array(
    'params' => array (
        'product_type' => ProductManager::PRODUCT_TYPE_VARIATION,
        'request' => array (
            'parent_product_id' => '%PRODUCT_ID%',
        )
    )
);

$schema['products']['cache']['request_handlers'][] = '%PRODUCT_ID%';

return $schema;
