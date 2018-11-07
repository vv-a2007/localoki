<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:15
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527545495be02d0f1e4707-11851176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8ccfb1db388d07e02e85923005309a08b83b5e' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/tooltip.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1527545495be02d0f1e4707-11851176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0f1f8ad2_21592578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0f1f8ad2_21592578')) {function content_5be02d0f1f8ad2_21592578($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
