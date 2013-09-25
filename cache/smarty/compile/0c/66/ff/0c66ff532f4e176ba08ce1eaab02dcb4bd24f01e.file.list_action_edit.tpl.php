<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:28:57
         compiled from "C:\wamp\www\shop\admin2857\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13393524106f950f754-27434274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c66ff532f4e176ba08ce1eaab02dcb4bd24f01e' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\admin2857\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1377656062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13393524106f950f754-27434274',
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
  'unifunc' => 'content_524106f9523f33_26306080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524106f9523f33_26306080')) {function content_524106f9523f33_26306080($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>