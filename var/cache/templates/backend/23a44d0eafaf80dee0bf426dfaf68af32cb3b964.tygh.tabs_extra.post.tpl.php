<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:26
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4032362755be02dce4ec8d3-52467628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a44d0eafaf80dee0bf426dfaf68af32cb3b964' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/tabs_extra.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4032362755be02dce4ec8d3-52467628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dce5023e7_30594317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dce5023e7_30594317')) {function content_5be02dce5023e7_30594317($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
