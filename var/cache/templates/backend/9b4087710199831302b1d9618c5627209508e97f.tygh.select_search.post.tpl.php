<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:15
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3783220455be02d0fa22223-27866454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4087710199831302b1d9618c5627209508e97f' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3783220455be02d0fa22223-27866454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0fa306a3_07606013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0fa306a3_07606013')) {function content_5be02d0fa306a3_07606013($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
