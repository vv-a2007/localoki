<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:46:58
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/search/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7068916735be02db2d62ea0-76961397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '256bd23f26be52b292a4430c4232bc23e333bea4' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/search/results.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7068916735be02db2d62ea0-76961397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'found_objects' => 0,
    'object' => 0,
    'search' => 0,
    'search_results' => 0,
    'result' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02db2e5dc65_72223313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02db2e5dc65_72223313')) {function content_5be02db2e5dc65_72223313($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('text_no_matching_results_found','text_no_matching_results_found','search_results_for'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['params']->value['compact']=="Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['found_objects']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
            <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["object"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['found_objects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["object"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                    <?php echo Smarty::$_smarty_vars['capture']['buttons'];?>

                    <div class="cm-tab-tools btn-bar btn-toolbar" id="tools_manage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
_buttons">
                    <!--tools_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
_buttons--></div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php } ?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>"manage_".((string)$_smarty_tpl->tpl_vars['search']->value['default']),'track'=>true), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
    <?php }?>
    
<?php } else { ?>
    <hr width="100%" />

    <?php if ($_smarty_tpl->tpl_vars['search_results']->value) {?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <p>&nbsp;</p>
    <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
    <?php if (!$_smarty_tpl->tpl_vars['result']->value['first']) {?>
    <hr />
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"search:search_results")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"search:search_results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['result']->value['object']=="products") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/one_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['result']->value,'key'=>$_smarty_tpl->tpl_vars['result']->value['id']), 0);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['object']=="pages") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/one_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page'=>$_smarty_tpl->tpl_vars['result']->value), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"search:search_results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php } ?>

    <p>&nbsp;</p>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
    <?php }?>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable($_smarty_tpl->__("search_results_for",array("[search]"=>$_REQUEST['q'])), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'main_buttons_meta'=>''), 0);?>
<?php }} ?>
