<?php /*%%SmartyHeaderCode:1598952411d64c5aaf6-98510536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a398a3ceb5d9895e31d22beeb672aa21f8135fd5' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1378760948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598952411d64c5aaf6-98510536',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524289316242b2_26502882',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524289316242b2_26502882')) {function content_524289316242b2_26502882($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<div class="title_block"><a href="http://localhost/shop/en/my-account" title="Manage your customer account" rel="nofollow">My account</a></div>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/shop/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/shop/en/order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/shop/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/shop/en/identity" title="Manage your personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/shop/en/?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>