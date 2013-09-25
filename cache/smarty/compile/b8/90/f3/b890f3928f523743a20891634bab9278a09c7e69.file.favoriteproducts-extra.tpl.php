<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 11:51:01
         compiled from "C:\wamp\www\shop\themes\tushima\modules\favoriteproducts\favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:580652410c25dacaa8-35982647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b890f3928f523743a20891634bab9278a09c7e69' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\tushima\\modules\\favoriteproducts\\favoriteproducts-extra.tpl',
      1 => 1378760958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '580652410c25dacaa8-35982647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52410c25de4f80_93507144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52410c25de4f80_93507144')) {function content_52410c25de4f80_93507144($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add">
    <a href="#" onClick="event.preventDefault(); return false;">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

        </a>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove">
    <a href="#" onClick="event.preventDefault(); return false;">
    <?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

    </a>
</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
    <a href="#" onClick="event.preventDefault(); return false;">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

        </a>
</li>
<li id="favoriteproducts_block_extra_removed">
    <a href="#" onClick="event.preventDefault(); return false;">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

        </a>        
</li><?php }} ?>