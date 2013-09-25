<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:46:58
         compiled from "C:\wamp\www\shop\themes\tushima\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499352410b327c35e2-65322403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e53ddb2d9dc3ca5cf212257371bd77f8e923023' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\tushima\\category-count.tpl',
      1 => 1378760934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499352410b327c35e2-65322403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52410b327f9189_21979379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52410b327f9189_21979379')) {function content_52410b327f9189_21979379($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>