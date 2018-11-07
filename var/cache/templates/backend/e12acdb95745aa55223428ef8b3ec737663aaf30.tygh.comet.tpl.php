<?php /* Smarty version Smarty-3.1.21, created on 2018-10-30 17:40:31
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6622497355bd87b6fe964f7-28697399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e12acdb95745aa55223428ef8b3ec737663aaf30' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/common/comet.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6622497355bd87b6fe964f7-28697399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5bd87b6fe9e9a2_27808727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd87b6fe9e9a2_27808727')) {function content_5bd87b6fe9e9a2_27808727($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
