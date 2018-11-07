<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:39:55
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/call_requests/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3705130585bd87b4bd12d45-89571581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a387c9c497c54b7d3293af0a7e52a6e24e75fa' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/addons/call_requests/hooks/index/meta.post.tpl',
      1 => 1540644272,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3705130585bd87b4bd12d45-89571581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b4bd4ca52_82105329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b4bd4ca52_82105329')) {function content_5bd87b4bd4ca52_82105329($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><meta name="format-detection" content="telephone=no"><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><meta name="format-detection" content="telephone=no"><?php }?><?php }} ?>
