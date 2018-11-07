<?php /* Smarty version Smarty-3.1.21, created on 2018-11-07 13:31:22
         compiled from "/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/block_manager/widget_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13468314335be2cd0a928ae9-45973534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efeb78d16775f5f7486fd70a68b0aa926ed7ceaf' => 
    array (
      0 => '/Users/vladimiranokhin/PhpstormProjects/localoki/design/backend/templates/views/block_manager/widget_code.tpl',
      1 => 1539165106,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13468314335be2cd0a928ae9-45973534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_https_url' => 0,
    'widget_http_url' => 0,
    'widget_layout_id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5be2cd0a9857b8_91388404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be2cd0a9857b8_91388404')) {function content_5be2cd0a9857b8_91388404($_smarty_tpl) {?><div class="tygh" id="tygh_container">
</div>
<?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
    (function() {
        var url = 'https:' == document.location.protocol ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_https_url']->value, ENT_QUOTES, 'UTF-8');?>
' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_http_url']->value, ENT_QUOTES, 'UTF-8');?>
';
        var cw = document.createElement('script'); cw.type = 'text/javascript'; cw.async = true;
        cw.src = '//widget.cart-services.com/static/init.js?url=' + url + '&layout=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['widget_layout_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
';
        document.getElementById('tygh_container').appendChild(cw);
        })();
<?php echo '</script'; ?>
>
<!-- Before using a widget make sure that the
" <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> "
meta tag exists. -->
<?php }} ?>
