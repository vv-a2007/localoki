<?php /* Smarty version Smarty-3.1.21, created on 2018-11-06 17:41:34
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/views/seo_rules/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20505496045be1b12a2daa01-68333534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09276c6b05e6a9d5057af7c0e6417978d3838416' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/views/seo_rules/manage.tpl',
      1 => 1541518746,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20505496045be1b12a2daa01-68333534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be1b12a5c4970_94857140',
  'variables' => 
  array (
    'seo_data' => 0,
    'var' => 0,
    'key' => 0,
    '_dispatch' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be1b12a5c4970_94857140')) {function content_5be1b12a5c4970_94857140($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo_name','url_dispatch_part','controller_description','dispatch_value','seo_name','dispatch_value','seo_name','tools','delete','no_data','new_rule','add_new','seo_rules'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("add_seo_rule", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="rule_add_var" class="form-horizontal form-edit">
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="control-group">
    <label class="control-label cm-required" for="rule_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls">
        <input type="text" name="rule_data[name]" id="rule_name" value="" class="span9" />
    </div>
</div>
<div class="control-group">
    <label class="control-label cm-required" for="rule_params"><?php echo $_smarty_tpl->__("url_dispatch_part");?>
</label>
    <div class="controls">
        <input type="text" name="rule_data[rule_params]" id="rule_params" value="" class="span9" />
        <p class="muted"><?php echo $_smarty_tpl->__("controller_description");?>
</p>
    </div>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[seo_rules.update]",'cancel_action'=>"close"), 0);?>

</div>
</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>



<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="seo_form" class="form-horizontal form-edit">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['seo_data']->value) {?>
<input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th width="1%" class="mobile-hide">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="35%"><?php echo $_smarty_tpl->__("dispatch_value");?>
</th>
        <th width="64%"><?php echo $_smarty_tpl->__("seo_name");?>
</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["var"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["var"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["var"]->key => $_smarty_tpl->tpl_vars["var"]->value) {
$_smarty_tpl->tpl_vars["var"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["var"]->key;
?>
    <tr>
        <td class="mobile-hide">
            <input type="checkbox" name="dispatches[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("dispatch_value");?>
">
            <input type="hidden" name="seo_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][rule_params]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
" />
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td data-th="<?php echo $_smarty_tpl->__("seo_name");?>
">
            <input type="text" name="seo_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="input-hidden span7" /></td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <div class="hidden-tools">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->tpl_vars["_dispatch"] = new Smarty_variable(rawurlencode(((string)$_smarty_tpl->tpl_vars['var']->value['dispatch'])), null, 0);?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('class'=>"cm-confirm",'type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"seo_rules.delete?rule_params=".((string)$_smarty_tpl->tpl_vars['_dispatch']->value),'method'=>"POST"));?>
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
    </tr>
    <?php } ?>
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
    <span class="mobile-hidden shift-right">
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['seo_data']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[seo_rules.m_delete]",'form'=>"seo_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    </span>

    <?php if ($_smarty_tpl->tpl_vars['seo_data']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[seo_rules.m_update]",'but_role'=>"action",'but_target_form'=>"seo_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_seo_rule",'text'=>$_smarty_tpl->__("new_rule"),'title'=>$_smarty_tpl->__("add_new"),'content'=>Smarty::$_smarty_vars['capture']['add_seo_rule'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"seo_rules.manage",'view_type'=>"seo_rules"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/seo/views/seo_rules/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"seo_rules.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("seo_rules"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true), 0);?>

<?php }} ?>
