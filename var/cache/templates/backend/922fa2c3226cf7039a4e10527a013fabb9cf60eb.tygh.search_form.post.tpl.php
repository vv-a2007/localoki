<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:45:35
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14669096535be02d5fa974b4-40696640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922fa2c3226cf7039a4e10527a013fabb9cf60eb' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14669096535be02d5fa974b4-40696640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d5faa94e0_98896067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d5faa94e0_98896067')) {function content_5be02d5faa94e0_98896067($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }} ?>
