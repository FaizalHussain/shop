<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:29:40
         compiled from "C:\wamp\www\shop\themes\default\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428152410724d03129-72698663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b2ed584b02761eff56e2a1e06c0e328bae1072' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\default\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1377656064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428152410724d03129-72698663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52410724d57447_54889206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52410724d57447_54889206')) {function content_52410724d57447_54889206($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div id="social_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>