<?php /* Smarty version Smarty-3.1.14, created on 2013-09-24 17:01:12
         compiled from "C:\wamp\www\shop\themes\TUSHIMA\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2479052411d65101671-91944596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1826d0f5a0e160749517836c0f209d55abfe38' => 
    array (
      0 => 'C:\\wamp\\www\\shop\\themes\\TUSHIMA\\header.tpl',
      1 => 1379991586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2479052411d65101671-91944596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52411d653c8006_08313213',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'shop_name_to_trim' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'cssfile' => 0,
    'cssfile2' => 0,
    'forcount' => 0,
    'media' => 0,
    'css_dir' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'js_dir' => 0,
    'HOOK_HEADER' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'page_name' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52411d653c8006_08313213')) {function content_52411d653c8006_08313213($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\shop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<?php $_smarty_tpl->tpl_vars['shop_name_to_trim'] = new Smarty_variable(" - ".((string)$_smarty_tpl->tpl_vars['shop_name']->value), null, 0);?>
                <title><?php echo smarty_modifier_escape(smarty_modifier_replace($_smarty_tpl->tpl_vars['meta_title']->value,$_smarty_tpl->tpl_vars['shop_name_to_trim']->value,''), 'htmlall', 'UTF-8');?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['content_dir']->value);?>
';
			var baseUri = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_uri']->value);?>
';
			var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
			var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
    <?php $_smarty_tpl->tpl_vars['forcount'] = new Smarty_variable(1, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
             <?php $_smarty_tpl->tpl_vars['cssfile'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['css_uri']->value,-30), null, 0);?>
             <?php $_smarty_tpl->tpl_vars['cssfile2'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['css_uri']->value,-20), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['cssfile']->value!='actinfos/blockcontactinfos.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='/modules/blockcms/blockcms.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='/blockcontact/blockcontact.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='facturer/blockmanufacturer.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='countfooter/blockmyaccount.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='es/blocksocial/blocksocial.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='/homefeatured/homefeatured.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='les/blockreinsurance/style.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='es/blocksearch/blocksearch.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='lockuserinfo/blockuserinfo.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='odules/blockcart/blockcart.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='tlinks/blockpermanentlinks.css'&&$_smarty_tpl->tpl_vars['cssfile2']->value!='css/product_list.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='mplete/jquery.autocomplete.css'&&$_smarty_tpl->tpl_vars['cssfile']->value!='odules/blocktags/blocktags.css'){?>
            <?php $_smarty_tpl->tpl_vars['forcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['forcount']->value+1, null, 0);?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
        <?php }?>
	<?php } ?>
<?php }?>
<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
custom.css" rel="stylesheet" type="text/css" media="screen" />

<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
respond.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
imgSizer.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jQuery.equalHeights.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
breakpoints.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
responsive.js"></script>



		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	</head>
	
	<body class="resp <?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?>hide-left-column<?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?>hide-right-column<?php }?> <?php if ($_smarty_tpl->tpl_vars['content_only']->value){?> content_only <?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?>>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<div id="layout" class="clearfix">

			<!-- Header -->
			<div id="header">
				<div id="header_right">
                                    <div id="logo_wrapper">
				<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
                                            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" />
				</a>
                                    </div>    
					<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

				</div>
			</div>

			<div id="columns" class="clearfix">
				<!-- Left -->
				<div id="left_column" class="column">
					<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='index')){?><?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='category')){?><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='product')){?><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
<?php }?>
				</div>

				<!-- Center -->
				<div id="center_column" class="<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='index')){?> columnWide3<?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='category')){?> columnWide2<?php }elseif((isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value=='product')){?> columnWide2<?php }else{ ?> columnWide2<?php }?>">
	<?php }?>
<?php }} ?>