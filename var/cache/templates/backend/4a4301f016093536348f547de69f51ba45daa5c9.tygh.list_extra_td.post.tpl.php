<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:46:16
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18786307805be02d888b7467-22275779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4301f016093536348f547de69f51ba45daa5c9' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18786307805be02d888b7467-22275779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d888d3ff5_84675694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d888d3ff5_84675694')) {function content_5be02d888d3ff5_84675694($_smarty_tpl) {?><td class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
