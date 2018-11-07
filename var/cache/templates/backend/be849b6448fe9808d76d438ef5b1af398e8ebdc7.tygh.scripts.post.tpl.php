<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:32
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16943629465bd87b70679db6-60876797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be849b6448fe9808d76d438ef5b1af398e8ebdc7' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_plans/hooks/index/scripts.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16943629465bd87b70679db6-60876797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans_payments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b70695f37_34796598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b70695f37_34796598')) {function content_5bd87b70695f37_34796598($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['vendor_plans_payments']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo fn_url('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
