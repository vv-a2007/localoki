<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:08
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5820363905bd87b582f63e9-43267736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b01868798849464640045a4e425c0036c25cbf8' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl',
      1 => 1540644272,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5820363905bd87b582f63e9-43267736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b58341c49_15697750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b58341c49_15697750')) {function content_5bd87b58341c49_15697750($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"newsletters_subscribe",'gdpr_target_elem'=>"subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'tooltip_only'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/addons/gdpr/hooks/newsletters/email_subscription_block.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"newsletters_subscribe",'gdpr_target_elem'=>"subscr_email".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'tooltip_only'=>true), 0);?>

<?php }?><?php }} ?>
