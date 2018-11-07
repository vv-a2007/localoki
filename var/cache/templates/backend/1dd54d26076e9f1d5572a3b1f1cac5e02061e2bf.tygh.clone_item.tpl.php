<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:27
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9588115635be02d1b0fd0c4-60683732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd54d26076e9f1d5572a3b1f1cac5e02061e2bf' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/clone_item.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9588115635be02d1b0fd0c4-60683732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d1b123ab8_00283507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d1b123ab8_00283507')) {function content_5be02d1b123ab8_00283507($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
