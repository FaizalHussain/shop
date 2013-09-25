<?php /* Smarty version Smarty-3.1.14, created on 2013-09-25 11:56:31
         compiled from "C:\wamp\www\shop\modules\paypal\views\templates\hook\column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1970752425eef4f8320-41828127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7383c7539ffd8329b3521e10d76b291841898d02' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\modules\\paypal\\views\\templates\\hook\\column.tpl',
      1 => 1380081357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970752425eef4f8320-41828127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52425eef5105f8_02249202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52425eef5105f8_02249202')) {function content_52425eef5105f8_02249202($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>