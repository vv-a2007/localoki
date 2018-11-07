<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:30
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12614636465bd87b6e9aaec3-99195324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31dd51ad992f8a261e9071bbac122656600e8f7' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/help_tutorial/hooks/index/actions.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12614636465bd87b6e9aaec3-99195324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'sidebar_content' => 0,
    'sidebar_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b6ea13550_56421682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b6ea13550_56421682')) {function content_5bd87b6ea13550_56421682($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('help_tutorial.need_help','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index"||$_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
<div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click <?php if (trim($_smarty_tpl->tpl_vars['sidebar_content']->value)!='') {
if ($_smarty_tpl->tpl_vars['sidebar_position']->value=="right") {?>pulled-left<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_position']->value=="left") {?>pulled-right<?php }
}?>" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
</div>
<?php }?><?php }} ?>
