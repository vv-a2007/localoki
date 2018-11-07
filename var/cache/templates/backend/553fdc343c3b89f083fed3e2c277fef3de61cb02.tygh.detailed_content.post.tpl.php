<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/categories/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1321121055be02dcdbe4562-51958636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553fdc343c3b89f083fed3e2c277fef3de61cb02' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/categories/detailed_content.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1321121055be02dcdbe4562-51958636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dcdc00c52_04274196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dcdc00c52_04274196')) {function content_5be02dcdc00c52_04274196($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['category_data']->value,'object_name'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"c"), 0);?>

<?php }?><?php }} ?>
