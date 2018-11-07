<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:39:17
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11216092615be02be5bfb513-76486571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62062801ff1daf609c573c1ec27ba718230d5055' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/save.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11216092615be02be5bfb513-76486571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02be5c15fe2_99574570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02be5c15fe2_99574570')) {function content_5be02be5c15fe2_99574570($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
