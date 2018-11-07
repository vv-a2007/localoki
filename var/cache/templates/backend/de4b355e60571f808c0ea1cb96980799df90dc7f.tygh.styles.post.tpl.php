<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:24
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/call_requests/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5845046005bd87b68dcf714-47178256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de4b355e60571f808c0ea1cb96980799df90dc7f' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/call_requests/hooks/index/styles.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5845046005bd87b68dcf714-47178256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statuses' => 0,
    'status' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b68e16412_74999414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b68e16412_74999414')) {function content_5bd87b68e16412_74999414($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/call_requests/styles.less"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("styles", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_schema('call_requests','status_colors'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['statuses']->value) {?>    
        <?php  $_smarty_tpl->tpl_vars["color"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["color"]->_loop = false;
 $_smarty_tpl->tpl_vars["status"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["color"]->key => $_smarty_tpl->tpl_vars["color"]->value) {
$_smarty_tpl->tpl_vars["color"]->_loop = true;
 $_smarty_tpl->tpl_vars["status"]->value = $_smarty_tpl->tpl_vars["color"]->key;
?>
            .cr-btn-status-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
 {
                .buttonBackground(lighten(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
, 5%));
            }
        <?php } ?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_style(array('content'=>Smarty::$_smarty_vars['capture']['styles'],'type'=>"less"),$_smarty_tpl);?>

<?php }} ?>
