<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:14
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1867624975be02d0e349101-78815383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '148222281aa03caf07fe87fb1dc0fd6e4de29e63' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/product_variations/hooks/products/list_extra_links.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1867624975be02d0e349101-78815383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0e3655c4_86627365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0e3655c4_86627365')) {function content_5be02d0e3655c4_86627365($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp5));?>
</li>
<?php }?><?php }} ?>
