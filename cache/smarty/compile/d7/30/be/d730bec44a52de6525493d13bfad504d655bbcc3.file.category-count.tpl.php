<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 13:05:30
         compiled from "C:\wamp\www\shop\themes\TUSHIMA\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231552411d9a22ae01-71355818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd730bec44a52de6525493d13bfad504d655bbcc3' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\category-count.tpl',
      1 => 1378760934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231552411d9a22ae01-71355818',
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
  'unifunc' => 'content_52411d9a2609b7_51732029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52411d9a2609b7_51732029')) {function content_52411d9a2609b7_51732029($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>