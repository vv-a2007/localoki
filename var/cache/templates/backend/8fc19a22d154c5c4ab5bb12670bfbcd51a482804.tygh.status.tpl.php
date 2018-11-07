<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:13
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4472831995be02d0db58100-58565835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fc19a22d154c5c4ab5bb12670bfbcd51a482804' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit/status.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4472831995be02d0db58100-58565835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0db7b807_59380862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0db7b807_59380862')) {function content_5be02d0db7b807_59380862($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
