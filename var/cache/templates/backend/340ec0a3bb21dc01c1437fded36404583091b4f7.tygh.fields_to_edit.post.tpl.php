<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:39:17
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16380437085be02be5b4b5d7-96312659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340ec0a3bb21dc01c1437fded36404583091b4f7' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16380437085be02be5b4b5d7-96312659',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02be5b60882_56548996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02be5b60882_56548996')) {function content_5be02be5b60882_56548996($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
