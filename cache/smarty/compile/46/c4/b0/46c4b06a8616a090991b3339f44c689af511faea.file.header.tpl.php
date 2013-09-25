<?php /* Smarty version Smarty-3.1.14, created on 2013-09-25 15:29:34
         compiled from "C:\wamp\www\shop\modules\paypal\views\templates\back\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28623524290de590075-11975998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c4b06a8616a090991b3339f44c689af511faea' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\modules\\paypal\\views\\templates\\back\\header.tpl',
      1 => 1380081357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28623524290de590075-11975998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524290de5cd880_21619572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524290de5cd880_21619572')) {function content_524290de5cd880_21619572($_smarty_tpl) {?><script type="text/javascript">
    var PayPal_WPS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
';
    var PayPal_HSS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
';
    var PayPal_ECS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
';
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PayPal_module_dir']->value;?>
/views/templates/back/back_office.js"></script><?php }} ?>