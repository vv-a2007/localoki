<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:45:35
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20411045115be02d5fbc5908-04447670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd066d38afb4dd5e7d535e019fc0a57d944a45d2b' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20411045115be02d5fbc5908-04447670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d5fbd6413_59521690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d5fbd6413_59521690')) {function content_5be02d5fbd6413_59521690($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
