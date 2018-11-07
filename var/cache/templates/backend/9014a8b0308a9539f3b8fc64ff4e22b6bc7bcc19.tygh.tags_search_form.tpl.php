<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:45:51
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/views/tags/components/tags_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13261185785be02d6f6e4484-56674909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9014a8b0308a9539f3b8fc64ff4e22b6bc7bcc19' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/tags/views/tags/components/tags_search_form.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13261185785be02d6f6e4484-56674909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d6f750d48_39023307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d6f750d48_39023307')) {function content_5be02d6f750d48_39023307($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('search','tag','show','all','active','disabled','period'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="tags_search_form" method="get">
    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
    <div class="sidebar-field">
        <label for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
        <input type="text" id="elm_tag" name="tag" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" />
    </div>

    <div class="sidebar-field">
        <label for="tag_status_identifier"><?php echo $_smarty_tpl->__("show");?>
</label>
        <select name="status" id="tag_status_identifier">
            <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
            <option value="A"<?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="D"<?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="D") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
    <div class="group form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"tags_search_form"), 0);?>

            </div>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"tags:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"tags:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"tags:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"tags"), 0);?>


    </form>
</div><?php }} ?>
