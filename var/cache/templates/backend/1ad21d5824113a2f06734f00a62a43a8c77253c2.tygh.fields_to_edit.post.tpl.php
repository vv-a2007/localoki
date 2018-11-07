<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:39:17
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8689008485be02be5b2bc03-94619068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ad21d5824113a2f06734f00a62a43a8c77253c2' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8689008485be02be5b2bc03-94619068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02be5b41b68_63875060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02be5b41b68_63875060')) {function content_5be02be5b41b68_63875060($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }?><?php }} ?>
