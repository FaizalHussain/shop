<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 13:04:34
         compiled from "C:\wamp\www\shop\themes\TUSHIMA\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3054252411d62489a97-53433646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '944cd13d42b28026762a06133f11666d14d8afaf' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1378760956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3054252411d62489a97-53433646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52411d624c8ae4_25611541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52411d624c8ae4_25611541')) {function content_52411d624c8ae4_25611541($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	</div>

	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>

	<!--/ Menu -->
<?php }?><?php }} ?>