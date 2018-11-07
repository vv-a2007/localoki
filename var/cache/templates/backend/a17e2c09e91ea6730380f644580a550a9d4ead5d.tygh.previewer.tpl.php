<?php /* Smarty version Smarty-3.1.21, created on 2018-11-07 13:31:36
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7540440555be2cd183bdde7-83166442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17e2c09e91ea6730380f644580a550a9d4ead5d' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/previewer.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7540440555be2cd183bdde7-83166442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be2cd183cd8c3_41556956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be2cd183cd8c3_41556956')) {function content_5be2cd183cd8c3_41556956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
