<?php /* Smarty version Smarty-3.1.21, created on 2018-11-06 19:02:35
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11156626065be1c92b702973-73743699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9c7dedb6d37d9d0afeef31e9a3fd7c8cc18f01' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_search_form.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11156626065be1c92b702973-73743699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'put_request_vars' => 0,
    'search' => 0,
    'runtime' => 0,
    'period' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be1c92b7b8c91_81958525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be1c92b7b8c91_81958525')) {function content_5be1c92b7b8c91_81958525($_smarty_tpl) {?><?php if (!is_callable('smarty_function_array_to_fields')) include '/Users/vladimiranokhin/PhpstormProjects/localoki/app/functions/smarty_plugins/function.array_to_fields.php';
?><?php
fn_preload_lang_vars(array('search','vendor_communication.customer_name','company'));
?>
<div class="sidebar-row">
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_communication.threads",'view_type'=>"vc_threads"), 0);?>

    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form name="thread_search_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_REQUEST['redirect_url']) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
            <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape'=>array("data_id")),$_smarty_tpl);?>

        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
            <div class="sidebar-field">
                <label for="elm_customer"><?php echo $_smarty_tpl->__("vendor_communication.customer_name");?>
</label>
                <div class="break">
                    <input type="text" name="customer_name" id="elm_customer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
" />
                </div>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
                    <div class="break">
                        <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"vc_thread",'in_popup'=>false), 0);?>


    </form>
</div><hr>
<?php }} ?>
