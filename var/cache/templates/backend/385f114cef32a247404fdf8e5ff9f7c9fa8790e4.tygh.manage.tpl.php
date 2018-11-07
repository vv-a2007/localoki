<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:45:51
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/views/tags/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19619387105be02d6f50b9e5-12634987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385f114cef32a247404fdf8e5ff9f7c9fa8790e4' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/views/tags/manage.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19619387105be02d6f50b9e5-12634987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'tags' => 0,
    'search' => 0,
    'c_url' => 0,
    'tag_objects' => 0,
    'o' => 0,
    'tag' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d6f6970f4_50999877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d6f6970f4_50999877')) {function content_5be02d6f6970f4_50999877($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('tag','status','tag','tools','delete','status','no_data','activate_selected','disable_selected','tags'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<form class="form-horizontal form-edit" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="tags_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-sort table-middle table-responsive">
    <thead>
    <tr>
        <th class="left mobile-hide" width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="50%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="tag") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=tag&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("tag");?>
</a></th>
        <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
?>
        <th class="center">&nbsp;&nbsp;<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['name']);?>
&nbsp;&nbsp;</th>
        <?php } ?>
        <th>&nbsp;</th>
        <th class="right" width="12%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");?>
</a></th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
    <tbody>
        <tr>
            <td class="left mobile-hide"><input type="checkbox" class="cm-item" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
" name="tag_ids[]"/></td>
            <td data-th="<?php echo $_smarty_tpl->__("tag");?>
">
                <input type="text" name="tags_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
][tag]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" size="20" class="input-hidden">
            </td>
            <?php  $_smarty_tpl->tpl_vars["o"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["o"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tag_objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["o"]->key => $_smarty_tpl->tpl_vars["o"]->value) {
$_smarty_tpl->tpl_vars["o"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["o"]->key;
?>
            <td class="center" data-th="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['name']);?>
">
                <?php if ($_smarty_tpl->tpl_vars['tag']->value['objects_count'][$_smarty_tpl->tpl_vars['k']->value]) {?><a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['o']->value['url'],"tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['objects_count'][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>0<?php }?>
            </td>
            <?php } ?>
            <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                <div class="hidden-tools">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"tags.delete?tag_id=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag_id']),'method'=>"POST"));?>
</li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                </div>
            </td>
            <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['tag']->value['tag_id'],'status'=>$_smarty_tpl->tpl_vars['tag']->value['status'],'items_status'=>fn_get_predefined_statuses("tags"),'object_id_name'=>"tag_id",'table'=>"tags"), 0);?>

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

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tags:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tags:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("activate_selected"),'dispatch'=>"dispatch[tags.approve]",'form'=>"tags_form"));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("disable_selected"),'dispatch'=>"dispatch[tags.disapprove]",'form'=>"tags_form"));?>
</li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tags:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <li class="divider"></li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[tags.m_delete]",'form'=>"tags_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[tags.m_update]",'but_role'=>"submit-link",'but_target_form'=>"tags_form"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"tags.manage",'view_type'=>"tags"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/tags_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"tags.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("tags"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
