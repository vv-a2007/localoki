<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:46:16
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6399866425be02d88749d16-74251274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81350142d9dea607ab2f29a60a2a976ef6efe96' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6399866425be02d88749d16-74251274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d8876ca61_08572111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d8876ca61_08572111')) {function content_5be02d8876ca61_08572111($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('vendor_plans.plan'));
?>
<th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }} ?>
