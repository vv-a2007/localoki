<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:46:04
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9379870665be02d7c376a95-37821159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63cb44b39d12cf7fb1c849f139286d97e8a2de1f' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/sidebox.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9379870665be02d7c376a95-37821159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d7c3cfd42_35320018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d7c3cfd42_35320018')) {function content_5be02d7c3cfd42_35320018($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
