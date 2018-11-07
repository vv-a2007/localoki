<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:13
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19353429255be02d0db88b13-17513244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31623b8a3532b6014089e36cb4555fa1a35e8618' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit/actions.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19353429255be02d0db88b13-17513244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0dba8063_10611545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0dba8063_10611545')) {function content_5be02d0dba8063_10611545($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone_selected','export_selected'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
