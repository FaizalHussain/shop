{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="{$lang_iso}"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="{$lang_iso}"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
	<head>
		{assign var=shop_name_to_trim value=" - $shop_name"}
                <title>{$meta_title|replace:$shop_name_to_trim:''|escape:'htmlall':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
{/if}
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="{$meta_language}" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		<script type="text/javascript">
			var baseDir = '{$content_dir|addslashes}';
			var baseUri = '{$base_uri|addslashes}';
			var static_token = '{$static_token|addslashes}';
			var token = '{$token|addslashes}';
			var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
			var priceDisplayMethod = {$priceDisplay};
			var roundMode = {$roundMode};
		</script>
{if isset($css_files)}
    {assign var=forcount value=1}
	{foreach from=$css_files key=css_uri item=media name=css}
             {assign var=cssfile value=$css_uri|substr:-30}
             {assign var=cssfile2 value=$css_uri|substr:-20}
        {if $cssfile != 'actinfos/blockcontactinfos.css' and 
            $cssfile != '/modules/blockcms/blockcms.css' and
            $cssfile != '/blockcontact/blockcontact.css' and
            $cssfile != 'facturer/blockmanufacturer.css' and
            $cssfile != 'countfooter/blockmyaccount.css' and
            $cssfile != 'es/blocksocial/blocksocial.css' and
            $cssfile != '/homefeatured/homefeatured.css' and
            $cssfile != 'les/blockreinsurance/style.css' and
            $cssfile != 'es/blocksearch/blocksearch.css' and
            $cssfile != 'lockuserinfo/blockuserinfo.css' and
            $cssfile != 'odules/blockcart/blockcart.css' and
            $cssfile != 'tlinks/blockpermanentlinks.css' and
            $cssfile2 != 'css/product_list.css' and
            $cssfile != 'mplete/jquery.autocomplete.css' and
            $cssfile != 'odules/blocktags/blocktags.css'
            }
            {assign var=forcount value=$forcount+1}
	<link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
        {/if}
	{/foreach}
{/if}
<link href="{$css_dir}custom.css" rel="stylesheet" type="text/css" media="screen" />

{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri}"></script>
	{/foreach}
{/if}
<script type="text/javascript" src="{$js_dir}respond.min.js"></script>
<script type="text/javascript" src="{$js_dir}imgSizer.js"></script>
<script type="text/javascript" src="{$js_dir}jQuery.equalHeights.js"></script>
<script type="text/javascript" src="{$js_dir}breakpoints.js"></script>
<script type="text/javascript" src="{$js_dir}responsive.js"></script>



		{$HOOK_HEADER}
	</head>
	
	<body class="resp {if $hide_left_column}hide-left-column{/if} {if $hide_right_column}hide-right-column{/if} {if $content_only} content_only {/if}" {if isset($page_name)}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if}>
	{if !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
		<div id="restricted-country">
			<p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
		</div>
		{/if}
		<div id="layout" class="clearfix">

			<!-- Header -->
			<div id="header">
				<div id="header_right">
                                    <div id="logo_wrapper">
				<a id="header_logo" href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
                                            <img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" />
				</a>
                                    </div>    
					{$HOOK_TOP}
				</div>
			</div>

			<div id="columns" class="clearfix">
				<!-- Left -->
				<div id="left_column" class="column">
					{if (isset($page_name) and $page_name == 'index')}{elseif (isset($page_name) and $page_name == 'category')}{$HOOK_LEFT_COLUMN}{elseif (isset($page_name) and $page_name == 'product')}{$HOOK_LEFT_COLUMN}{else}{$HOOK_LEFT_COLUMN}{/if}
				</div>

				<!-- Center -->
				<div id="center_column" class="{if (isset($page_name) and $page_name == 'index')} columnWide3{elseif (isset($page_name) and $page_name == 'category')} columnWide2{elseif (isset($page_name) and $page_name == 'product')} columnWide2{else} columnWide2{/if}">
	{/if}
