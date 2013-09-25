<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:46:43
         compiled from "C:\wamp\www\shop\themes\tushima\modules\blockcontact\blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820952410b2315daa2-80755844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd644957afa99d7a9cab2c22f4144648fdea0f86f' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\tushima\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1378760944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820952410b2315daa2-80755844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52410b231a4219_52672283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52410b231a4219_52672283')) {function content_52410b231a4219_52672283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div id="contact_block" class="block">
	<div class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</div>
	<div class="block_content clearfix">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
operator.jpg" id="operator" />
			<p><?php echo smartyTranslate(array('s'=>'Our hotline is available 24/7','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our hotline','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>