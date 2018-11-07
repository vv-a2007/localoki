<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 13:47:28
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6734852045be02dd06d7502-25671007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02757ec402efb773123545803b24be4eabb801a' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/block_manager/render/container.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6734852045be02dd06d7502-25671007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'content' => 0,
    'dynamic_object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be02dd0778c38_60934084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be02dd0778c38_60934084')) {function content_5be02dd0778c38_60934084($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('set_custom_configuration','insert_grid','insert_grid','container_options','enable_or_disable_container','use_default_block_configuration'));
?>
<div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
" class="container container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['uses_default_content']) {?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status']=="D") {?>container-off<?php }?>" <?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>data-ca-status="disabled"<?php } else { ?>data-ca-status="active"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['linked_message']) {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['linked_message'], ENT_QUOTES, 'UTF-8');?>

            <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_custom_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("set_custom_configuration");?>
</a>
        </p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    
    <div class="clearfix"></div>
    <div class="grid-control-menu bm-control-menu">
        <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
            <div class="grid-control-menu-actions">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-plus cm-tooltip" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                    <ul class="dropdown-menu droptop">
                        <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                    </ul>
                </div>
                <div class="cm-tooltip cm-action icon-cog bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                <div class="cm-action bm-action-switch cm-tooltip icon-off action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
            </div>
        <?php }?>

        <h4 class="grid-control-title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>

            <?php if ($_smarty_tpl->tpl_vars['container']->value['can_be_reset_to_default']) {?>
                <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_default_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("use_default_block_configuration");?>
</a>
            <?php }?>
        </h4>
    </div>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<hr /><?php }} ?>
