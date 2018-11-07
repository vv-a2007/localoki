<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:32
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2750800525bd87b706e1024-28647945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f248e4248490ffe365e969f5b52aaf2419ef930' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2750800525bd87b706e1024-28647945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b7070ea79_22077591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b7070ea79_22077591')) {function content_5bd87b7070ea79_22077591($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('advanced_import.cant_save_preset_invalid_modifiers'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/read_more.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.tr({
            "advanced_import.cant_save_preset_invalid_modifiers":
                "<?php echo strtr($_smarty_tpl->__("advanced_import.cant_save_preset_invalid_modifiers"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
