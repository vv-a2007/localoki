<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 18:29:14
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/addons/components/upload_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8181801655bd886dab20ce8-57399413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd34443a36ebdb4756ef4b274d07605536969c9dc' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/addons/components/upload_addon.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8181801655bd886dab20ce8-57399413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd886dab56513_28625098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd886dab56513_28625098')) {function content_5bd886dab56513_28625098($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('install_addon_text','marketplace_find_more','upload_install'));
?>
<div id="addon_upload_container" class="install-addon">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="addon_upload_container" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');?>
" />
        <div class="install-addon-wrapper">
            <i class="icon-puzzle-piece install-addon-banner" width="151px" height="141px"></i>
            
            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_addon_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"addon_pack[0]"), 0);?>

            
            <div class="marketplace">
                <p class="marketplace-link"> <?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
 </p>
            </div>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload_install")), 0);?>


        </div>
    </form>
<!--addon_upload_container--></div>
<?php }} ?>
