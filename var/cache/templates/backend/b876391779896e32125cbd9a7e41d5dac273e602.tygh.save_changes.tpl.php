<?php /* Smarty version Smarty-3.1.21, created on 2018-11-07 13:31:32
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18251195195be2cd145fbe62-04258449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b876391779896e32125cbd9a7e41d5dac273e602' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/save_changes.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18251195195be2cd145fbe62-04258449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be2cd1460ca58_37241343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be2cd1460ca58_37241343')) {function content_5be2cd1460ca58_37241343($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
