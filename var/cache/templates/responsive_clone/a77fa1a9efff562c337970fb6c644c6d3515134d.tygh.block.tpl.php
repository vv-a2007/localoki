<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:00
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14737838805bd87b500c80a4-49957738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77fa1a9efff562c337970fb6c644c6d3515134d' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1540643079,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14737838805bd87b500c80a4-49957738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b50105779_83020486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b50105779_83020486')) {function content_5bd87b50105779_83020486($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    ty-float-left<?php }?>">
<?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
    </div>
<?php }?><?php }} ?>
