<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 13:06:26
         compiled from "C:\wamp\www\shop\themes\TUSHIMA\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953352411dd2a36e09-68265950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4461e527392e3a08b4dbe34ad03ccdcf134b86' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\mobile\\index.tpl',
      1 => 1378760960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953352411dd2a36e09-68265950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52411dd2a6df98_25896567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52411dd2a6df98_25896567')) {function content_52411dd2a6df98_25896567($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>