<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 14:04:31
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10424606065be031cfdef5f1-30574480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7b581a1ec6004134cf6e13cfe6cd2d8f8f18ac' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10424606065be031cfdef5f1-30574480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be031cfe2a650_37119215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be031cfe2a650_37119215')) {function content_5be031cfe2a650_37119215($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
