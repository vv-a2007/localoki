<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:44:14
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/components/easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1935713165be02d0e3c18a1-47073773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0615d097227e458eac118c802640adc4000182ad' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/components/easter_egg.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1935713165be02d0e3c18a1-47073773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02d0e3fc5d6_67030780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02d0e3fc5d6_67030780')) {function content_5be02d0e3fc5d6_67030780($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
