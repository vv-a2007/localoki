<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1211101625be02d19998d16-49772824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '499a72e48331aeb39bcc8f995e6998d31fac280a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/update.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1211101625be02d19998d16-49772824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selectable_group' => 0,
    'feature' => 0,
    'is_group' => 0,
    'allow_save' => 0,
    'id' => 0,
    'hide_inputs_class' => 0,
    'in_popup' => 0,
    'return_url' => 0,
    'active_tab' => 0,
    'group_features' => 0,
    'group_feature' => 0,
    'picker_selected_companies' => 0,
    'items' => 0,
    'hide_first_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d19df8fe5_71333855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d19df8fe5_71333855')) {function content_5be02d19df8fe5_71333855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('general','variants','categories','name','feature_code','position','description','type','group','checkbox','single','multiple','selectbox','text','number','brand_type','others','text','number','date','warning_variants_removal','group','none','feature_display_on_product','tt_views_product_features_update_feature_display_on_product','feature_display_on_catalog','tt_views_product_features_update_feature_display_on_catalog','feature_display_on_header','prefix','tt_views_product_features_update_prefix','suffix','tt_views_product_features_update_suffix','text_all_categories_included','editing_product_feature'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_features.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['selectable_group'] = new Smarty_variable(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['selectable_group'] = new Smarty_variable((smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")).($_smarty_tpl->tpl_vars['selectable_group']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['selectable_group'] = new Smarty_variable((smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")).($_smarty_tpl->tpl_vars['selectable_group']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['selectable_group'] = new Smarty_variable((smarty_modifier_enum("ProductFeatures::EXTENDED")).($_smarty_tpl->tpl_vars['selectable_group']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['feature']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['feature_id'], null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['is_group']->value==true) {?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(@constant('NEW_FEATURE_GROUP_ID'), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
    <?php }?>
<?php }?>

<?php if ($_REQUEST['selected_section']) {?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable($_REQUEST['selected_section'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["active_tab"] = new Smarty_variable('tab_details', null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['feature']->value,"product_features"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['hide_inputs_class'] = new Smarty_variable('', null, 0);?>
<?php if (fn_check_form_permissions('')||!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
<?php $_smarty_tpl->tpl_vars['hide_inputs_class'] = new Smarty_variable("cm-hide-inputs", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_features_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit cm-disable-empty-files <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_inputs_class']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="feature_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if (!$_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['return_url']->value)===null||$tmp==='' ? $_REQUEST['return_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs cm-track">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['active_tab']->value=="tab_details_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']&&strpos($_smarty_tpl->tpl_vars['selectable_group']->value,$_smarty_tpl->tpl_vars['feature']->value['feature_type'])===false||!$_smarty_tpl->tpl_vars['feature']->value) {?>hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['active_tab']->value=="tab_variants_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("variants");?>
</a></li>
        <li id="tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?> hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['active_tab']->value=="tab_categories_".((string)$_smarty_tpl->tpl_vars['id']->value)) {?> active<?php }?>"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_feature_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
            <input class="span9" type="text" name="feature_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"feature_data[company_id]",'id'=>"elm_feature_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['feature']->value['company_id']), 0);?>

        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_code");?>
</label>
            <div class="controls">
                <input type="text" size="3" name="feature_data[feature_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_code'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position");?>
</label>
            <div class="controls">
                <input type="text" size="3" name="feature_data[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" id="elm_feature_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
            <div class="controls">
                <textarea name="feature_data[full_description]" cols="55" rows="4" class="cm-wysiwyg input-textarea-long" id="elm_feature_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['full_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_group']->value||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")) {?>
            <input type="hidden" name="feature_data[feature_type]" value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::GROUP"), ENT_QUOTES, 'UTF-8');?>
" />
        <?php } else { ?>
        <div class="control-group">
            <label class="control-label cm-required" for="elm_feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")) {
echo $_smarty_tpl->__("group");
} else { ?>
                <select name="feature_data[feature_type]" id="elm_feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-feature-type <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>cm-new-feature<?php }?>">
                    <optgroup label="<?php echo $_smarty_tpl->__("checkbox");?>
">
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("single");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple");?>
</option>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("selectbox");?>
">
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::EXTENDED"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("brand_type");?>
</option>
                    </optgroup>
                    <optgroup label="<?php echo $_smarty_tpl->__("others");?>
">
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::TEXT_FIELD"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::TEXT_FIELD")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::NUMBER_FIELD"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
                        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::DATE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
                    </optgroup>
                </select>
                <div class="error-message feature_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" style="display: none" id="warning_feature_change_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="arrow"></div><div class="message"><p><?php echo $_smarty_tpl->__("warning_variants_removal");?>
</p></div></div>
            <?php }?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("group");?>
</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")) {?>-<?php } else { ?>
                <select name="feature_data[parent_id]" id="elm_feature_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-feature-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-feature-group">
                    <option value="0">-<?php echo $_smarty_tpl->__("none");?>
-</option>
                    <?php  $_smarty_tpl->tpl_vars["group_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["group_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["group_feature"]->key => $_smarty_tpl->tpl_vars["group_feature"]->value) {
$_smarty_tpl->tpl_vars["group_feature"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")) {?>
                            <option data-ca-display-on-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_product'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-catalog="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_catalog'], ENT_QUOTES, 'UTF-8');?>
" data-ca-display-on-header="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['display_on_header'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_feature']->value['feature_id']==$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php }?>
                    <?php } ?>
                </select>
            <?php }?>
            </div>
        </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"feature_data[status]",'id'=>"elm_feature_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['feature']->value,'hidden'=>true), 0);?>


        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_product");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_product_features_update_feature_display_on_product")), 0);?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_product]" value="N" />
            <input id="elm_feature_display_on_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_product]" value="Y" data-ca-display-id="OnProduct" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_product']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_product']=="Y") {?>disabled="disabled"<?php }?>/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_catalog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_catalog");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_product_features_update_feature_display_on_catalog")), 0);?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_catalog]" value="N" />
            <input id="elm_feature_display_on_catalog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_catalog]" value="Y"  data-ca-display-id="OnCatalog" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_catalog']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_catalog']=="Y") {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_display_on_header_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_display_on_header");?>
</label>
            <div class="controls">
            <input type="hidden" name="feature_data[display_on_header]" value="N" />
            <input id="elm_feature_display_on_header_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="feature_data[display_on_header]" value="Y"  data-ca-display-id="OnHeader" <?php if ($_smarty_tpl->tpl_vars['feature']->value['display_on_header']=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['parent_id']&&$_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['feature']->value['parent_id']]['display_on_header']=="Y") {?>disabled="disabled"<?php }?> />
            </div>
        </div>

        <?php if ((!$_smarty_tpl->tpl_vars['feature']->value&&!$_smarty_tpl->tpl_vars['is_group']->value)||($_smarty_tpl->tpl_vars['feature']->value['feature_type']&&$_smarty_tpl->tpl_vars['feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP"))) {?>
        <div class="control-group">
            <label class="control-label" for="elm_feature_prefix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("prefix");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_product_features_update_prefix")), 0);?>
</label>
            <div class="controls">
            <input type="text" name="feature_data[prefix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_prefix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_feature_suffix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("suffix");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_views_product_features_update_suffix")), 0);?>
</label>
            <div class="controls">
            <input type="text" name="feature_data[suffix]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
" id="elm_feature_suffix_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" /></div>
        </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_features:properties")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_features:properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_features:properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </fieldset>
    <!--content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if (!$_smarty_tpl->tpl_vars['feature']->value['parent_id']) {?>
    
    <div class="hidden" id="content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['categories_path']) {?>
        <?php $_smarty_tpl->tpl_vars["items"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['feature']->value['categories_path']), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"feature_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['items']->value,'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>$_smarty_tpl->__("text_all_categories_included"),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['feature']->value['company_id'],'but_meta'=>"pull-right"), 0);?>


    <!--content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['id']->value!=@constant('NEW_FEATURE_GROUP_ID'))||!$_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="hidden" id="content_tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/variants_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature_type'=>$_smarty_tpl->tpl_vars['feature']->value['feature_type']), 0);?>

    <!--content_tab_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="buttons-container">
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_features.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['feature']->value['feature_id']), 0);?>

    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[product_features.update]",'but_target_form'=>"update_features_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>


</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->__("editing_product_feature"),'title_end'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>

<?php }?><?php }} ?>
