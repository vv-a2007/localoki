<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:34:51
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/tools/components/changes_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2181225675be02adb206626-41424018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddab96f65e68062dd8c8a931ebca57e7db0a6c1' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/tools/components/changes_tree.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2181225675be02adb206626-41424018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_id' => 0,
    'changes_tree' => 0,
    'item' => 0,
    'shift' => 0,
    'show_all' => 0,
    'item_id' => 0,
    'expand_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02adb302378_32264950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02adb302378_32264950')) {function content_5be02adb302378_32264950($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
<div class="hidden" id="changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['changes_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<div class="table-wrapper">
    <table width="100%" class="table table-tree table-middle">
    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['level']%2) {?>class="multiple-table-row"<?php }?>>
        <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['level'])===null||$tmp==='' ? "0" : $tmp),'assign'=>"shift"),$_smarty_tpl);?>

        <td<?php if ($_smarty_tpl->tpl_vars['item']->value['action']) {?> class="snapshot-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['action'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <span style="padding-left: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {
if ($_smarty_tpl->tpl_vars['show_all']->value) {?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination <?php if ($_smarty_tpl->tpl_vars['expand_all']->value&&$_smarty_tpl->tpl_vars['item']->value['action']!="added") {?>hidden<?php }?>"><span class="icon-caret-right"></span></span><?php } else { ?><span title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination"><span class="icon-caret-right"></span></span><?php }?><span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||!$_smarty_tpl->tpl_vars['show_all']->value||$_smarty_tpl->tpl_vars['item']->value['action']=="added") {?> hidden<?php }?>"><span class="icon-caret-down"></span></span><?php } else { ?>&nbsp;<?php }?><span <?php if (!$_smarty_tpl->tpl_vars['item']->value['content']) {?> style="padding-left: 14px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
        </td>
    </tr>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
    <div<?php if (!$_smarty_tpl->tpl_vars['expand_all']->value||$_smarty_tpl->tpl_vars['item']->value['action']=="added") {?> class="hidden"<?php }?> id="changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/tools/components/changes_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('changes_tree'=>$_smarty_tpl->tpl_vars['item']->value['content'],'parent_id'=>false), 0);?>

    <?php }?>
    <!--changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--changes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>
<?php }} ?>
