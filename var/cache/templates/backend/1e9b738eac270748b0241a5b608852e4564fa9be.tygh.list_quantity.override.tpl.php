<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:14
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/product_variations/hooks/products/list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12843680515be02d0e206f43-50019493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e9b738eac270748b0241a5b608852e4564fa9be' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/product_variations/hooks/products/list_quantity.override.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12843680515be02d0e206f43-50019493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0e226ac0_93154549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0e226ac0_93154549')) {function content_5be02d0e226ac0_93154549($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("edit"),'but_href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&product_type=".$_tmp4,'but_role'=>"edit"), 0);?>

<?php }?><?php }} ?>
