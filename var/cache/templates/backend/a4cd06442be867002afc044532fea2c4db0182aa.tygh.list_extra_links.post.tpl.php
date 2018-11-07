<?php /* Smarty version Smarty-3.1.21, created on 2018-11-05 14:04:31
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2114373235be031cfda2104-89354726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4cd06442be867002afc044532fea2c4db0182aa' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2114373235be031cfda2104-89354726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be031cfdcda04_31511134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be031cfdcda04_31511134')) {function content_5be031cfdcda04_31511134($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C"&&$_smarty_tpl->tpl_vars['user']->value['anonymized']!="Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"gdpr.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp1),'method'=>"POST"));?>
</li>
<?php }?>
<?php }} ?>
