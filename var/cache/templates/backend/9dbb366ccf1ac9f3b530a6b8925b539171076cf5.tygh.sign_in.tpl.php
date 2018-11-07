<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:34:09
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7720902035be02ab1a381c0-27962316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbb366ccf1ac9f3b530a6b8925b539171076cf5' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/sign_in.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7720902035be02ab1a381c0-27962316',
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
  'unifunc' => 'content_5be02ab1a4c271_95576602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02ab1a4c271_95576602')) {function content_5be02ab1a4c271_95576602($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
