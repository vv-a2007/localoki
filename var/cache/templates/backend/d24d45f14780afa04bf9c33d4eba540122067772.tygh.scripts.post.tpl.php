<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:32
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7845197085bd87b70634666-32159328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24d45f14780afa04bf9c33d4eba540122067772' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7845197085bd87b70634666-32159328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b70655ce7_13943965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b70655ce7_13943965')) {function content_5bd87b70655ce7_13943965($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('name','description','addons.paypal.display_name','addons.paypal.display_description'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.tr({
            name: '<?php echo $_smarty_tpl->__("name");?>
',
            description: '<?php echo $_smarty_tpl->__("description");?>
',
            addons_paypal_display_name: '<?php echo $_smarty_tpl->__("addons.paypal.display_name");?>
',
            addons_paypal_display_description: '<?php echo $_smarty_tpl->__("addons.paypal.display_description");?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/addons/paypal/payment_configurator.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>
<?php }} ?>
