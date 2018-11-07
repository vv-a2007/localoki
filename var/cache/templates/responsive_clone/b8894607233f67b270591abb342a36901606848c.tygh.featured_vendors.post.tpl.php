<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:04
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/vendor_locations/hooks/companies/featured_vendors.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13668646735bd87b544c1f63-59053745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8894607233f67b270591abb342a36901606848c' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/vendor_locations/hooks/companies/featured_vendors.post.tpl',
      1 => 1540644272,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13668646735bd87b544c1f63-59053745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b54551515_79679335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b54551515_79679335')) {function content_5bd87b54551515_79679335($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_locations.nearby','vendor_locations.nearby'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (isset($_smarty_tpl->tpl_vars['company']->value['distance'])) {?>
    <div class="ty-grid-list__company-distance">
        <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-distance">
        <?php if (round($_smarty_tpl->tpl_vars['company']->value['distance'],2)>1) {?>
            <i class="ty-icon-location-arrow"></i>&nbsp;
            <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['company']->value['distance'],2), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("vendor_locations.nearby");?>

        <?php }?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/companies/featured_vendors.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/hooks/companies/featured_vendors.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (isset($_smarty_tpl->tpl_vars['company']->value['distance'])) {?>
    <div class="ty-grid-list__company-distance">
        <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-company-distance">
        <?php if (round($_smarty_tpl->tpl_vars['company']->value['distance'],2)>1) {?>
            <i class="ty-icon-location-arrow"></i>&nbsp;
            <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['company']->value['distance'],2), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("vendor_locations.nearby");?>

        <?php }?>
    </div>
<?php }?>
<?php }?><?php }} ?>
