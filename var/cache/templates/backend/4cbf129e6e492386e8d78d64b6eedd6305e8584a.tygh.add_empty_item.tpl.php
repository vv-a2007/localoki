<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:27
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15052659495be02d1b0cf0b4-38661860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cbf129e6e492386e8d78d64b6eedd6305e8584a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15052659495be02d1b0cf0b4-38661860',
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
  'unifunc' => 'content_5be02d1b0dc389_45312206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d1b0dc389_45312206')) {function content_5be02d1b0dc389_45312206($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
