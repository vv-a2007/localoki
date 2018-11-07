<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:01
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20983053445bd87b517bfe18-28962859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e1c04e7b3085ac231440f03fae4c01890ce75d' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1540643079,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20983053445bd87b517bfe18-28962859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b517d75f2_07203997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b517d75f2_07203997')) {function content_5bd87b517d75f2_07203997($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
