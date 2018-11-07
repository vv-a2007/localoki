<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:25
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3821198205be02dcd2e6641-50626137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03f83b59077be792f784cd70a25982d1238ab1e' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/subheader.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3821198205be02dcd2e6641-50626137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dcd341a48_70191162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dcd341a48_70191162')) {function content_5be02dcd341a48_70191162($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="icon-caret-down"></span><?php }?>
</h4><?php }} ?>
