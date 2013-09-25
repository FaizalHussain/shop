<?php /*%%SmartyHeaderCode:38552411d6312f6d3-62769795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad03d36a77b53478bba53a5323198a346134063' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1378760954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38552411d6312f6d3-62769795',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524289310876e9_51735022',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524289310876e9_51735022')) {function content_524289310876e9_51735022($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<div class="title_block"><a href="http://localhost/shop/en/supplier" title="Suppliers">Suppliers</a></div>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/shop/en/1__applestore" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/shop/en/2__shure-online-store" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/shop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://localhost/shop/en/1__applestore">AppleStore</option>
									<option value="http://localhost/shop/en/2__shure-online-store">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>