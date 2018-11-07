<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:34:50
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/tools/view_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7634475215be02adaea8855-50859082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8bced4baef7e8fabdfa4ab8c451e9e1f60f6b2' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/tools/view_changes.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7634475215be02adaea8855-50859082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'check_types' => 0,
    'changes_tree' => 0,
    'db_diff' => 0,
    'config' => 0,
    'compare_data' => 0,
    'dist_filename' => 0,
    'db_d_diff' => 0,
    'creation_time' => 0,
    'settings' => 0,
    'changes_tree_keys' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02adb1edb58_39055087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02adb1edb58_39055087')) {function content_5be02adb1edb58_39055087($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_formatfilesize')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_inline_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('file_changes_detector.added','file_changes_detector.changed','file_changes_detector.deleted','modified_core_files_found','no_modified_core_files_found','database_structure_changes','database_data_changes','db_name','file','compare','scan_for_modified_core_files','last_scan_time','file_changes_detector.snapshot_not_found','file_changes_detector'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("diff_legend", null, null); ob_start(); ?>
    <div class="diff-legend">
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['A']) {?>
            <span class="label snapshot-added"><?php echo $_smarty_tpl->__("file_changes_detector.added");?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['C']) {?>
            <span class="label snapshot-changed"><?php echo $_smarty_tpl->__("file_changes_detector.changed");?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['check_types']->value['D']) {?>
            <span class="label snapshot-deleted"><?php echo $_smarty_tpl->__("file_changes_detector.deleted");?>
</span>
        <?php }?>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div class="items-container multi-level">
        <?php if ($_smarty_tpl->tpl_vars['changes_tree']->value) {?>
            <div class="alert alert-block">
                <p><?php echo $_smarty_tpl->__("modified_core_files_found",array('[product]'=>@constant('PRODUCT_NAME')));?>
</p>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("views/tools/components/changes_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('parent_id'=>0,'show_all'=>true,'expand_all'=>true), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_modified_core_files_found");?>
</p>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['db_diff']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("database_structure_changes")), 0);?>

        <pre style="height: 400px; overflow-y: scroll" class="diff-container"><?php echo $_smarty_tpl->tpl_vars['db_diff']->value;?>
</pre>
    <?php }?>

    
    
    

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="data_compare_form" enctype="multipart/form-data" class="form-horizontal form-edit">
        <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['show_database_changes']) {?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("database_data_changes")), 0);?>


            <div class="control-group">
                <label class="control-label" for="name_db" ><?php echo $_smarty_tpl->__("db_name");?>
</label>
                <div class="controls">
                    <input type="text" name="compare_data[db_name]" id="name_db" value="" class="span4" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="type_base_file"><?php echo $_smarty_tpl->__("file");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['compare_data']->value['file_path']) {?>
                        <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compare_data']->value['file_path'], ENT_QUOTES, 'UTF-8');?>
</b> (<?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['compare_data']->value['file_size']);?>
)
                    <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"base_file"), 0);?>

                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['show_database_changes']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("compare"),'but_role'=>"action",'but_target_form'=>"data_compare_form",'but_name'=>"dispatch[tools.view_changes]",'but_meta'=>"cm-submit"), 0);?>

            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['dist_filename']->value) {?>
                <a class="btn btn-primary" href="<?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("tools.create_snapshot?redirect_url=".$_tmp1), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("scan_for_modified_core_files");?>
</a>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['db_d_diff']->value) {?>
        <pre style="height: 300px; overflow-y: scroll" class="diff-container"><?php echo $_smarty_tpl->tpl_vars['db_d_diff']->value;?>
</pre>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['changes_tree']->value||$_smarty_tpl->tpl_vars['db_diff']->value||$_smarty_tpl->tpl_vars['db_d_diff']->value) {?>
        <?php echo Smarty::$_smarty_vars['capture']['diff_legend'];?>

    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("last_scan_time");?>
</h6>
            <p>
                <?php if ($_smarty_tpl->tpl_vars['dist_filename']->value) {?>
                    <span class="muted"><?php echo $_smarty_tpl->__("file_changes_detector.snapshot_not_found",array('[dist_filename]'=>$_smarty_tpl->tpl_vars['dist_filename']->value));?>
</span>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['creation_time']->value) {?><span class="muted"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['creation_time']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                <?php }?>
            </p>
            <hr />
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->tpl_vars['changes_tree_keys'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['changes_tree']->value), null, 0);?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        Tygh.$(document).ready(function(){
            Tygh.$('#on_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['changes_tree_keys']->value[0], ENT_QUOTES, 'UTF-8');?>
').click();
        }
        );
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("file_changes_detector"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
