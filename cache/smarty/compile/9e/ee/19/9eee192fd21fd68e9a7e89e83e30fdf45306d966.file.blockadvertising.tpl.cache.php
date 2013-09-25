<?php /* Smarty version Smarty-3.1.14, created on 2013-09-25 15:00:51
         compiled from "C:\wamp\www\shop\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1920552410723eddea6-65921181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eee192fd21fd68e9a7e89e83e30fdf45306d966' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1380081770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920552410723eddea6-65921181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52410723efbf25_03649205',
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52410723efbf25_03649205')) {function content_52410723efbf25_03649205($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!--
<div class="advertising_block">
    <p><a href="/modules/paypal/about.php" rel="nofollow"><img src="/modules/paypal/img/vertical_US_large.png" alt="PayPal" title="Pay with PayPal" /></a></p>
</div>
-->
<!-- /MODULE Block advertising -->
<?php }} ?>