<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:15
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17659489785be02d0f4b9ec4-21361690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fad1afac90817e008b36f70343f5a25df2889c8' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17659489785be02d0f4b9ec4-21361690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0f4d6441_06311828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0f4d6441_06311828')) {function content_5be02d0f4d6441_06311828($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
