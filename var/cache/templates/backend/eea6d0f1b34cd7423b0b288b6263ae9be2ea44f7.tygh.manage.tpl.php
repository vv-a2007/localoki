<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:55
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/usergroups/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396365605be02d37e14664-30769567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea6d0f1b34cd7423b0b288b6263ae9be2ea44f7' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/usergroups/manage.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1396365605be02d37e14664-30769567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_inputs' => 0,
    'usergroups' => 0,
    'usergroup' => 0,
    'usergroup_types' => 0,
    'hide_for_vendor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d380b6a50_39001565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d380b6a50_39001565')) {function content_5be02d380b6a50_39001565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('usergroup','type','status','usergroup','type','privileges','edit','delete','status','no_items','user_group_requests','new_usergroups','new_usergroups','usergroups'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(fn_check_form_permissions(''), null, 0);?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="usergroups_form" class="<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:manage")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:manage"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['usergroups']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-middle table-responsive">
    <thead>
    <tr>
        <th width="1%" class="mobile-hide">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
        <th width="45%"><?php echo $_smarty_tpl->__("type");?>
</th>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <th width="5%" class="mobile-hide">&nbsp;</th>
        <th class="right" width="15%"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['usergroup']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <td width="1%" class="mobile-hide">
            <input type="checkbox" name="usergroup_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" /></td>
        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
            <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <a class="row-status cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars("opener_group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php }?>
        </td>
        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("type");?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_types']->value[$_smarty_tpl->tpl_vars['usergroup']->value['type']], ENT_QUOTES, 'UTF-8');?>

        </td>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <td class="row-status mobile-hide">
            <?php if ($_smarty_tpl->tpl_vars['usergroup']->value['type']=="A") {?>
                <?php $_smarty_tpl->tpl_vars["_href"] = new Smarty_variable("usergroups.assign_privileges?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["_link_text"] = new Smarty_variable($_smarty_tpl->__("privileges"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["_href"] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars["_link_text"] = new Smarty_variable('', null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']),'text'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup'],'link_text'=>$_smarty_tpl->__("edit"),'act'=>"link",'href'=>"usergroups.update?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])."&group_type=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['type'])), 0);?>
</li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"usergroups.delete?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']),'method'=>"POST"));?>
</li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools cm-hide-with-inputs">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
        <td class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(false, null, 0);?>
            <?php if (!fn_check_view_permissions("usergroups.manage","POST")) {?>
                <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],'status'=>$_smarty_tpl->tpl_vars['usergroup']->value['status'],'hidden'=>true,'object_id_name'=>"usergroup_id",'table'=>"usergroups",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value), 0);?>

        </td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:manage"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if (fn_check_view_permissions("usergroups.update")) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("user_group_requests"),'href'=>"usergroups.requests"));?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['usergroups']->value) {?>
                    <li class="divider mobile-hide"></li>
                    <li class="mobile-hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[usergroups.m_delete]",'form'=>"usergroups_form"));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if (fn_check_view_permissions("usergroups.update")) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('usergroup'=>array()), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_usergroups",'text'=>$_smarty_tpl->__("new_usergroups"),'title'=>$_smarty_tpl->__("new_usergroups"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("usergroups"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
