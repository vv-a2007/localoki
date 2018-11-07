<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15653882755be02dcdccaef3-67600289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c053eaa7171f2f6383253360d24e571d29288ea9' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/discussion/hooks/categories/detailed_content.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15653882755be02dcdccaef3-67600289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dcdcf5047_53821687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dcdcf5047_53821687')) {function content_5be02dcdcf5047_53821687($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>$_smarty_tpl->__("discussion_title_category"),'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['category_discussion_type']), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
