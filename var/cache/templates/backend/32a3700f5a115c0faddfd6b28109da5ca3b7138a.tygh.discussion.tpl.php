<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:26
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9060915975be02dce066a00-80346168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a3700f5a115c0faddfd6b28109da5ca3b7138a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9060915975be02dce066a00-80346168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discussion' => 0,
    'runtime' => 0,
    'object_company_id' => 0,
    'allow_save' => 0,
    'post' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dce1847b7_25645035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dce1847b7_25645035')) {function content_5be02dce1847b7_25645035($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('add_post','add_post','no_data','text_enabled_testimonials_notice'));
?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['object_type']&&!$_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(($_smarty_tpl->tpl_vars['discussion']->value['object_type']!="M"||!$_smarty_tpl->tpl_vars['runtime']->value['company_id'])&&fn_check_view_permissions("discussion.update"), null, 0);?>

    <div id="content_discussion">
    <div class="clearfix">
        <div class="buttons-container buttons-bg pull-right">
            <?php if (fn_check_view_permissions("discussion.add")&&!(fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['object_company_id']->value||$_smarty_tpl->tpl_vars['discussion']->value['object_type']=='M'))) {?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=="E") {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_post",'title'=>$_smarty_tpl->__("add_post"),'icon'=>"icon-plus",'act'=>"general",'link_class'=>"cm-dialog-switch-avail"), 0);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_post",'link_text'=>$_smarty_tpl->__("add_post"),'act'=>"general",'link_class'=>"cm-dialog-switch-avail"), 0);?>

                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']&&fn_check_view_permissions("discussion_manager")) {?>
                <?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=="E") {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons_insert", null, null); ob_start(); ?>
                <?php }?>
                <?php if (fn_check_view_permissions("discussion.m_delete")) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[discussion.m_delete]",'form'=>"update_posts_form"));?>
</li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=="E") {?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }?>
            <?php }?>
        </div>
    </div><br>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

        <?php echo smarty_function_script(array('src'=>"js/addons/discussion/discussion.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


        <div class="posts-container <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php } else { ?>cm-hide-inputs<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>
                <div class="post-item <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']=="O") {
if ($_smarty_tpl->tpl_vars['post']->value['user_id']==$_smarty_tpl->tpl_vars['user_id']->value) {?>incoming<?php } else { ?>outgoing<?php }
}?>">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'type'=>$_smarty_tpl->tpl_vars['discussion']->value['type']), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php } ?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php echo $_smarty_tpl->__("text_enabled_testimonials_notice",array("[link]"=>fn_url("addons.manage#groupdiscussion")));?>


<?php }?><?php }} ?>
