<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:15
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15915939305be02d0f4dfb98-50011048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577876ab324182f21fa8ce2f84d540ab72c8bf5a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15915939305be02d0f4dfb98-50011048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0f505bb5_65861600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0f505bb5_65861600')) {function content_5be02d0f505bb5_65861600($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
