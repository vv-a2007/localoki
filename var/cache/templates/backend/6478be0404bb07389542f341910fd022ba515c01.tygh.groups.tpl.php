<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 14:50:08
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8985781885be03c80cd4643-86172162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6478be0404bb07389542f341910fd022ba515c01' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/groups.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8985781885be03c80cd4643-86172162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'features' => 0,
    'p_feature' => 0,
    'r_url' => 0,
    'non_editable' => 0,
    'href_edit' => 0,
    'href_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be03c80eb97e6_27016024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be03c80eb97e6_27016024')) {function content_5be03c80eb97e6_27016024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('group','categories','status','view','editing_group','delete','view_product_features','view','no_data','new_group','new_group','feature_groups'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["show_in_popup"] = new Smarty_variable(false, null, 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_features_form" id="manage_product_features_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="update_features_list">
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <div class="table-wrapper">
                <table width="100%" class="table table-middle table-objects">
                    <thead>
                    <tr>
                        <th class="left">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

                        </th>
                        <th width="40%"><?php echo $_smarty_tpl->__("group");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("categories");?>
</th>
                        <th width="5%">&nbsp;</th>
                        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars["p_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p_feature"]->key => $_smarty_tpl->tpl_vars["p_feature"]->value) {
$_smarty_tpl->tpl_vars["p_feature"]->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(!fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features"), null, 0);?>

                        <?php $_smarty_tpl->tpl_vars['href_edit'] = new Smarty_variable("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['href_delete'] = new Smarty_variable("product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value), null, 0);?>

                        <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-ct-product_features="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <td class="left">
                                <input type="checkbox" name="feature_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                            </td>
                            <td>
                                <div class="object-group-link-wrap">
                                    <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                        <a class="row-status cm-external-click <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?> data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } else { ?>
                                        <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['p_feature']->value['description'])===null||$tmp==='' ? $_smarty_tpl->__("view") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                    <span class="muted"><small> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
</small></span>
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['p_feature']->value), 0);?>

                                </div>
                            </td>
                            <td>
                                <div class="row-status object-group-details">
                                    <?php echo $_smarty_tpl->tpl_vars['p_feature']->value['feature_description'];?>

                                </div>
                            </td>
                            <td class="nowrap">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'title_start'=>$_smarty_tpl->__("editing_group"),'title_end'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0);?>
</li>
                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("delete"),'href'=>$_smarty_tpl->tpl_vars['href_delete']->value,'class'=>"cm-confirm cm-tooltip cm-ajax cm-ajax-force cm-ajax-full-render cm-delete-row",'data'=>array("data-ca-target-id"=>"pagination_contents"),'method'=>"POST"));?>
</li>
                                        <?php } else { ?>
                                            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'title_start'=>$_smarty_tpl->__("view_product_features"),'title_end'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'link_text'=>$_smarty_tpl->__("view"),'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0);?>
</li>
                                        <?php }?>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>
                            </td>
                            <td class="right nowrap">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'],'status'=>$_smarty_tpl->tpl_vars['p_feature']->value['status'],'hidden'=>true,'object_id_name'=>"feature_id",'table'=>"product_features",'update_controller'=>"product_features"), 0);?>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--update_features_list--></div>
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>array(),'in_popup'=>true,'is_group'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_feature",'text'=>$_smarty_tpl->__("new_group"),'title'=>$_smarty_tpl->__("new_group"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/product_feature_groups_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.groups"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[product_features.m_delete]",'form'=>"manage_product_features_form"));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("feature_groups"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
