<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 14:50:08
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/components/product_feature_groups_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271100185be03c80f394d2-41183357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f935e56da60ff6765932f59f4fd53a2d3bdf8502' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/product_features/components/product_feature_groups_search_form.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1271100185be03c80f394d2-41183357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    's_cid' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be03c81059577_69086876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be03c81059577_69086876')) {function content_5be03c81059577_69086876($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','category','all_categories','group','search'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_features_search_form" method="get">

<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("category");?>
:</label>
    <div class="break clear correct-picker-but">
    <?php if (fn_show_picker("categories",@constant('CATEGORY_THRESHOLD'))) {?>
        <?php if ($_smarty_tpl->tpl_vars['search']->value['category_ids']) {?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['category_ids'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["s_cid"] = new Smarty_variable("0", null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0);?>

    <?php }?>
    </div>
</div>
<div class="sidebar-field">
    <label for="fname"><?php echo $_smarty_tpl->__("group");?>
:</label>
    <input type="text" name="description" id="fname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>
<div class="sidebar-field">
    <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
</div>
</form>
</div><?php }} ?>
