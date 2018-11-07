<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:52:06
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20722517975be02ee6f1b544-12074757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25825b6ac0d860392bad82402f8108c29bf2dba' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20722517975be02ee6f1b544-12074757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'addons' => 0,
    'datafeeds' => 0,
    'datafeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02ee7169aa1_14616722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02ee7169aa1_14616722')) {function content_5be02ee7169aa1_14616722($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_notes')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.notes.php';
?><?php
fn_preload_lang_vars(array('notice','notice','export_cron_hint','notice','name','filename','status','name','filename','tools','local_export','export_to_server','upload_to_ftp','edit','status','no_data','add_datafeed','data_feeds'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"data_feeds:notice")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"data_feeds:notice"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array('title'=>$_smarty_tpl->__("notice"))); $_block_repeat=true; echo smarty_block_notes(array('title'=>$_smarty_tpl->__("notice")), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<p><?php echo $_smarty_tpl->__("export_cron_hint");?>
:<br />
    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['data_feeds']['cron_password'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"exim.cron_export","cron_password"=>$_tmp1)), ENT_QUOTES, 'UTF-8');?>

    </p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array('title'=>$_smarty_tpl->__("notice")), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"data_feeds:notice"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_datafeeds_form">

<?php if ($_smarty_tpl->tpl_vars['datafeeds']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table sortable table-middle table-responsive">
    <thead>
        <tr>
            <th width="5%" class="left mobile-hide"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <th width="45%" class="nowrap"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th width="35%" class="nowrap"><?php echo $_smarty_tpl->__("filename");?>
</th>
            <th width="1%" class="nowrap">&nbsp;</th>
            <th width="5%" class="nowrap right"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['datafeed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datafeed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datafeeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datafeed']->key => $_smarty_tpl->tpl_vars['datafeed']->value) {
$_smarty_tpl->tpl_vars['datafeed']->_loop = true;
?>
    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['datafeed']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <td class="left mobile-hide">
            <input type="checkbox" name="datafeed_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item" />
        </td>

        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <a href="<?php echo htmlspecialchars(fn_url("data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_name'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['datafeed']->value), 0);?>

        </td>

        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("filename");?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['file_name'], ENT_QUOTES, 'UTF-8');?>

        </td>

        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("local_export"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=L"));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("export_to_server"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=S"));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("upload_to_ftp"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=F"));?>
</li>
                <li class="divider"></li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>

        <td class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'],'status'=>$_smarty_tpl->tpl_vars['datafeed']->value['status'],'hidden'=>false,'object_id_name'=>"datafeed_id",'table'=>"data_feeds"), 0);?>

        </td>

    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['datafeeds']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[data_feeds.m_delete]",'form'=>"manage_datafeeds_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php ob_start();
echo $_smarty_tpl->__("add_datafeed");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"data_feeds.add",'prefix'=>"bottom",'title'=>$_tmp2,'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("data_feeds"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
