<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:27
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13368003045be02d1b776d09-49335665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9acc8e8e736574bd7db0c225921d59765c5a8f3' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13368003045be02d1b776d09-49335665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_type' => 0,
    'runtime' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d1b79e929_83044342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d1b79e929_83044342')) {function content_5be02d1b79e929_83044342($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::EXTENDED")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR"))) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0);?>

<?php }?><?php }} ?>
