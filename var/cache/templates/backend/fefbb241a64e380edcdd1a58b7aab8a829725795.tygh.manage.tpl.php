<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:38
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_filters/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9240762105be02d26440768-30157649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fefbb241a64e380edcdd1a58b7aab8a829725795' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_filters/manage.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9240762105be02d26440768-30157649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_fields' => 0,
    'key' => 0,
    'filter_field' => 0,
    'config' => 0,
    'filters' => 0,
    'filter' => 0,
    'runtime' => 0,
    'filter_features' => 0,
    'add_filter_button_tooltip' => 0,
    'add_filter_button_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d265e7617_07333884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d265e7617_07333884')) {function content_5be02d265e7617_07333884($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('editing_filter','edit','viewing_filter','view','no_data','filters_in_use','add_filter','new_filter','filters'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    var filter_fields = {};
    <?php  $_smarty_tpl->tpl_vars['filter_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter_field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter_field']->key => $_smarty_tpl->tpl_vars['filter_field']->value) {
$_smarty_tpl->tpl_vars['filter_field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['filter_field']->key;
?>
    filter_fields['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
'] = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_field']->value['slider'], ENT_QUOTES, 'UTF-8');?>
';
    <?php } ?>


function fn_check_product_filter_type(value, tab_id, id)
{
    var $ = Tygh.$;
    if (!value) { return; }
    $('#' + tab_id).toggleBy(!(value.indexOf('R') == 0) && !(value.indexOf('D') == 0));
    $('[id^=inputs_ranges' + id + ']').toggleBy((value.indexOf('D') == 0));
    $('[id^=dates_ranges' + id + ']').toggleBy(!(value.indexOf('D') == 0));
    $('#round_to_' + id + '_container').toggleBy(!filter_fields[value.replace(/\w+-/, '')]);
    $('#display_count_' + id + '_container').toggleBy(!(value.indexOf('R') == 0) && !(value.indexOf('F') == 0) && !(value.indexOf('S') > 0));
}

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"filters"), 0);?>


<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php } else { ?> cm-sortable<?php }?>" data-ca-sortable-table="product_filters" data-ca-sortable-id-name="filter_id" id="manage_filters_list">
    <div class="table-wrapper">
        <table width="100%" class="table table-middle table-objects table-striped">
        <tbody>

        <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>

            <?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters")) {?>
                <?php ob_start();
echo $_smarty_tpl->__("editing_filter");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['filter']->value['filter_id'],'show_id'=>true,'details'=>$_smarty_tpl->tpl_vars['filter']->value['filter_description'],'text'=>$_smarty_tpl->tpl_vars['filter']->value['filter'],'status'=>$_smarty_tpl->tpl_vars['filter']->value['status'],'href'=>"product_filters.update?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)."&in_popup",'object_id_name'=>"filter_id",'href_delete'=>"product_filters.delete?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']),'delete_target_id'=>"manage_filters_list,actions_panel",'table'=>"product_filters",'no_table'=>true,'draggable'=>true,'additional_class'=>"cm-no-hide-input cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']),'header_text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['filter']->value['filter']),'link_text'=>$_smarty_tpl->__("edit"),'company_object'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

            <?php } else { ?>
                <?php ob_start();
echo $_smarty_tpl->__("viewing_filter");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['filter']->value['filter_id'],'show_id'=>true,'details'=>$_smarty_tpl->tpl_vars['filter']->value['filter_description'],'text'=>$_smarty_tpl->tpl_vars['filter']->value['filter'],'status'=>$_smarty_tpl->tpl_vars['filter']->value['status'],'href'=>"product_filters.update?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)."&in_popup",'object_id_name'=>"filter_id",'table'=>"product_filters",'no_table'=>true,'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']),'header_text'=>$_tmp2.":&nbsp;".((string)$_smarty_tpl->tpl_vars['filter']->value['filter']),'link_text'=>$_smarty_tpl->__("view"),'non_editable'=>true,'is_view_link'=>true,'company_object'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>

            <?php }?>

        <?php }
if (!$_smarty_tpl->tpl_vars["filter"]->_loop) {
?>

            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>

        <?php } ?>
        </tbody>
        </table>
    </div>
<!--manage_filters_list--></div>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"filters"), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/product_filters/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter'=>array(),'in_popup'=>true), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (!fn_allowed_for("MULTIVENDOR")||(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("MULTIVENDOR"))) {?>
    <?php if (!$_smarty_tpl->tpl_vars['filter_fields']->value&&!$_smarty_tpl->tpl_vars['filter_features']->value) {?>
        <?php $_smarty_tpl->tpl_vars["add_filter_button_meta"] = new Smarty_variable("cm-disabled disabled", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["add_filter_button_tooltip"] = new Smarty_variable($_smarty_tpl->__("filters_in_use"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["add_filter_button_tooltip"] = new Smarty_variable($_smarty_tpl->__("add_filter"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_product_filter",'text'=>$_smarty_tpl->__("new_filter"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->tpl_vars['add_filter_button_tooltip']->value,'act'=>"general",'icon'=>"icon-plus",'link_class'=>$_smarty_tpl->tpl_vars['add_filter_button_meta']->value), 0);?>

    <?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_filters.manage",'view_type'=>"product_filters"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product_filters/components/product_filters_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_filters.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("filters"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>
<?php }} ?>
