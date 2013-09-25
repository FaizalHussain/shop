<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:28:57
         compiled from "C:\wamp\www\shop\admin2857\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9398524106f95448d9-87042518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd57c9f4da4d0955326477c08f730c802ddd79959' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\admin2857\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1377656062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9398524106f95448d9-87042518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524106f9558279_60380727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524106f9558279_60380727')) {function content_524106f9558279_60380727($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>