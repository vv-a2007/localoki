<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/common/seo_name_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12542104705be02dcdc05fc4-07637366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118e3321c494e5d1c50b464503170d3c9f6c3e06' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/common/seo_name_field.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12542104705be02dcdc05fc4-07637366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_title' => 0,
    'share_dont_hide' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'parent_uri' => 0,
    'object_name' => 0,
    'object_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dcdc51b38_08434921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dcdc51b38_08434921')) {function content_5be02dcdc51b38_08434921($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name','seo.create_redirect'));
?>
<?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<?php }?>
<div id="acc_addon_seo" class="collapsed in">
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['share_dont_hide']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="elm_seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">

        <?php $_smarty_tpl->tpl_vars['parent_uri'] = new Smarty_variable(fn_get_seo_parent_uri($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,@constant('DESCR_SL')), null, 0);?>

        <div class="input-prepend">
            <span class="cm-field-prefix add-on"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_uri']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_name]" id="elm_seo_name" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-long cm-seo-check-changed" /><span class="cm-field-suffix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_uri']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
            <div class="hidden cm-seo-check-changed-block">
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_create_redirect]" disabled="disabled" value="0" />
                <label class="checkbox inline"><input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_create_redirect]" value="1" checked="checked" disabled="disabled" /><?php echo $_smarty_tpl->__("seo.create_redirect");?>
</label>
            </div>
        </div>
    </div>
</div>
</div>
<?php }} ?>
