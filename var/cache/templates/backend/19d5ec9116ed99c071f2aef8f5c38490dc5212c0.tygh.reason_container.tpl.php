<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:46:16
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/companies/components/reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19932814445be02d88a25839-10498209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d5ec9116ed99c071f2aef8f5c38490dc5212c0' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/companies/components/reason_container.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19932814445be02d88a25839-10498209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'mandatory_notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d88a46d40_89344125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d88a46d40_89344125')) {function content_5be02d88a46d40_89344125($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</label>
    <div class="controls">
    <textarea class="span9" name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->tpl_vars['mandatory_notification']->value) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
        </div>
    </div>
</div>
</div><?php }} ?>
