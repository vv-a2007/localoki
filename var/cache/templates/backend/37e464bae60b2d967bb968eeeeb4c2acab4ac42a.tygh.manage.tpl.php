<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6376023345be02d1964a225-09127512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37e464bae60b2d967bb968eeeeb4c2acab4ac42a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/manage.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6376023345be02d1964a225-09127512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'features' => 0,
    'p_feature' => 0,
    'group_features' => 0,
    'show_in_popup' => 0,
    'r_url' => 0,
    'non_editable' => 0,
    'href_edit' => 0,
    'group_feature' => 0,
    'group_link_class' => 0,
    'href_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d19976794_19660858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d19976794_19660858')) {function content_5be02d19976794_19660858($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('feature','group','categories','status','feature','view','group','editing_group','view','categories','edit','editing_product_feature','delete','view_product_features','view','status','no_data','new_feature','new_feature','features'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_features_form" id="manage_product_features_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="update_features_list">
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table-objects table-responsive">
                    <thead>
                    <tr>
                        <th class="left mobile-hide" width="1%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

                        </th>
                        <th width="20%"><?php echo $_smarty_tpl->__("feature");?>
</th>
                        <th width="20%"><?php echo $_smarty_tpl->__("group");?>
</th>
                        <th class="mobile-hide" width="40%"><?php echo $_smarty_tpl->__("categories");?>
</th>
                        <th class="mobile-hide" width="5%">&nbsp;</th>
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
                        <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                            <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(false, null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(true, null, 0);?>
                        <?php }?>

                        <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(!fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features"), null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['parent_id']&&isset($_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['p_feature']->value['parent_id']])) {?>
                            <?php $_smarty_tpl->tpl_vars['group_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['group_features']->value[$_smarty_tpl->tpl_vars['p_feature']->value['parent_id']], null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['group_feature'] = new Smarty_variable(false, null, 0);?>
                        <?php }?>
                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['show_in_popup']->value) {?><?php echo "&return_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['r_url']->value;?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href_edit'] = new Smarty_variable("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']).$_tmp1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['href_delete'] = new Smarty_variable("product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value), null, 0);?>

                        <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-ct-product_features="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <td class="left mobile-hide">
                                <input type="checkbox" name="feature_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("feature");?>
">
                                <div class="object-group-link-wrap">
                                    <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                        <a <?php if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_edit']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="row-status cm-external-click <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?> data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
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
                            <td data-th="<?php echo $_smarty_tpl->__("group");?>
">
                                <?php if ($_smarty_tpl->tpl_vars['group_feature']->value) {?>
                                    <div class="object-group-link-wrap cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['group_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['group_feature']->value['status']!="A") {?>
                                            <?php $_smarty_tpl->tpl_vars['group_link_class'] = new Smarty_variable("row-status", null, 0);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars['group_link_class'] = new Smarty_variable('', null, 0);?>
                                        <?php }?>
                                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('link_class'=>((string)$_smarty_tpl->tpl_vars['group_link_class']->value),'id'=>"group".((string)$_smarty_tpl->tpl_vars['group_feature']->value['feature_id']),'link_text'=>$_smarty_tpl->tpl_vars['group_feature']->value['description'],'title_start'=>$_smarty_tpl->__("editing_group"),'title_end'=>$_smarty_tpl->tpl_vars['group_feature']->value['description'],'act'=>"edit",'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['group_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'no_icon_link'=>true), 0);?>

                                        <?php } else { ?>
                                            <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['group_feature']->value['description'])===null||$tmp==='' ? $_smarty_tpl->__("view") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <?php }?>
                                    </div>
                                <?php } else { ?>
                                    -
                                <?php }?>
                            </td>
                            <td class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("categories");?>
">
                                <div class="row-status object-group-details">
                                <?php if ($_smarty_tpl->tpl_vars['group_feature']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['group_feature']->value['feature_description'];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['p_feature']->value['feature_description'];?>

                                <?php }?>
                                </div>
                            </td>
                            <td class="nowrap mobile-hide">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?>
                                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_smarty_tpl->tpl_vars['href_edit']->value));?>
</li>
                                            <?php } else { ?>
                                                <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'title_start'=>$_smarty_tpl->__("editing_product_feature"),'title_end'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0);?>
</li>
                                            <?php }?>
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
                            <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
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
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker_2", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>array(),'in_popup'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_feature",'text'=>$_smarty_tpl->__("new_feature"),'title'=>$_smarty_tpl->__("new_feature"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker_2'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.manage",'view_type'=>"product_features"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/product_features_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.manage"), 0);?>

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
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("features"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
