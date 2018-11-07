<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:13
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14684980975be02d0d68a2e3-00832656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb228a45032b6b88360f3db536cce9a841bd2985' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/products/components/bulk_edit.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14684980975be02d0d68a2e3-00832656',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0d6e3338_25250413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0d6e3338_25250413')) {function content_5be02d0d6e3338_25250413($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('selected','category','price','status','edit_selected','actions'));
?>
<div class="bulk-edit clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
>

    <ul class="btn-group bulk-edit__wrapper">
        <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
            <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                   type="checkbox" 
                   checked 
                   data-ca-bulkedit-toggler="true"
                   data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                   data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
            />
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

        </li>

        <?php if (fn_check_view_permissions("products.m_update_prices")) {?>
        <li class="btn bulk-edit__btn bulk-edit__btn--category dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--category" data-toggle=".bulk-edit-categories-content"><?php echo $_smarty_tpl->__("category");?>
 <span class="caret mobile-hide"></span></span>

            <div class="bulk-edit--reset-dropdown-menu bulk-edit-categories-content">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </li>
        <?php }?>

        <?php if (fn_check_view_permissions("products.m_update_prices")) {?>
        <li class="btn bulk-edit__btn bulk-edit__btn--price dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("price");?>
 <span class="caret mobile-hide"></span></span>

            <div class="dropdown-menu bulk-edit--reset-dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </li>
        <?php }?>

        <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
            <span class="bulk-edit__btn-content">
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"manage_products_form"));?>

            </span>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu" data-toggle="dropdown">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>
    </ul>

</div><?php }} ?>
