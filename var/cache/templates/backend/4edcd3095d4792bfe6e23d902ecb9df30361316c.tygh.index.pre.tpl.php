<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:29
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20924213755bd87b6d500b64-66396942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4edcd3095d4792bfe6e23d902ecb9df30361316c' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_debt_payout/hooks/index/index.pre.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20924213755bd87b6d500b64-66396942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_block_alert' => 0,
    'block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b6d512ac6_32844715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b6d512ac6_32844715')) {function content_5bd87b6d512ac6_32844715($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_block_alert']->value) {?>
    <div class="alert alert-block alert-error debt-notification">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['block_alert']->value;?>

        </div>
        <div class="debt-notification__button">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pay_debt_class'=>"btn-large"), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
