<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
    <head>
        <title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
        {if isset($meta_description) AND $meta_description}
            <meta name="description" content="{$meta_description|escape:html:'UTF-8'}" />
        {/if}
        {if isset($meta_keywords) AND $meta_keywords}
            <meta name="keywords" content="{$meta_keywords|escape:html:'UTF-8'}" />
        {/if}
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <meta name="generator" content="{$category->id}" />
        <meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
        <link rel="shortcut icon" type="image/x-icon" href="{$img_ps_dir}favicon.ico?{$img_update_time}" />
        <script type="text/javascript">
                    var baseDir = '{$content_dir}';
                    var static_token = '{$static_token}';
                    var token = '{$token}';
                    var priceDisplayPrecision = {$priceDisplayPrecision*$currency->decimals};
                    var priceDisplayMethod = {$priceDisplay};
                    var roundMode = {$roundMode};
        </script>
        {if $page_name == "product" or $page_name == "search" or $page_name == "random-products" or $page_name == "new-products" or $page_name == "best-sales" or $page_name == "category" && $smarty.get.id_category != "26" or $page_name == "random-products"}
            <link href="themes/prestashop/css/global2.css" rel="stylesheet" type="text/css" media="all" />
        {else}
            <link href="themes/prestashop/css/global.css" rel="stylesheet" type="text/css" media="all" />
        {/if}
        <link href="themes/prestashop/css/addresses.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockpaymentlogo/blockpaymentlogo.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockviewed/blockviewed.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockcart/blockcart.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockmyaccount/blockmyaccount.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockbestsellers/blockbestsellers.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockcategories/blockcategories.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockspecials/blockspecials.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blocknewproducts/blocknewproducts.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockmanufacturer/blockmanufacturer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockcms/blockcms.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockadvertising/blockadvertising.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blocktags/blocktags.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blockstore/blockstore.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.autocomplete.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/product.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/thickbox.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/product_list.css" rel="stylesheet" type="text/css" media="all" />
        <link href="themes/prestashop/css/modules/blocksearch/blocksearch.css" rel="stylesheet" type="text/css" media="all" />
        {if isset($js_files)}
            {foreach from=$js_files item=js_uri}
                <script type="text/javascript" src="{$js_uri}"></script>
            {/foreach}
        {/if}
        {$HOOK_HEADER}
    </head>
    <body {if $page_name}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if}>
        {if !$content_only}
            {if isset($restricted_country_mode) && $restricted_country_mode}
                <div id="restricted-country">
                    <p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
                </div>
            {/if}
            <div id="page">
                <div class="header_topsec"> 
                    <!-- Top Links -->
                    <div class="toplinks">
                        <ul>
                            {if $logged}
                                <li><a href="my-account.php">My Account<em class="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>&nbsp;&nbsp;&nbsp;</a></li>
                            {else}
                                <li><a href="authentication.php">Subscribe<em class="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>&nbsp;&nbsp;&nbsp;</a></li>
                            {/if}

                            {if $logged}
                                <li><a>&nbsp;&nbsp;&nbsp;
                                        Hi, {$cookie->customer_firstname} {$cookie->customer_lastname}
                                        &nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="26-credits">
                                        Credits left: {$balance}

                                    </a>
                                </li>
                                <li><a href="{$link->getPageLink('index.php')}?mylogout">&nbsp;&nbsp;&nbsp;
                                        Sign Out
                                        &nbsp;&nbsp;&nbsp;</a></li>
                                    {else}
                                <li><a href="authentication.php">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Sign in
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                    <!-- Right sec -->
                </div>
                <!-- Header -->
                <div id="header">
                    <a id="header_logo" href="{$link->getPageLink('index.php')}" title="{$shop_name|escape:'htmlall':'UTF-8'}">
                        <img class="logo" src="{$img_ps_dir}logo.jpg?{$img_update_time}" alt="{$shop_name|escape:'htmlall':'UTF-8'}" {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}" {/if} />
                    </a>
                    <div id="header_right">
                        {$HOOK_TOP}
                    </div>
                </div>
                {if $page_name == "product" or $page_name == "search" or $page_name == "new-products" or $page_name == "best-sales" or $page_name == "random-products"}

                    <div class="toplinks2">
                        <ul>
                            <li><a href="new-products.php"><img src="themes/prestashop/img/ab1.jpg" /></a></li>
                            <li><a href="best-sales.php"><img src="themes/prestashop/img/ab2.jpg" /></a></li>
                            <li><a href="random-products.php"><img src="themes/prestashop/img/ab3.jpg" /></a></li>
                        </ul>
                    </div>
                {/if}
                {if $page_name == "category" && $smarty.get.id_category != "26"}
                    <div class="toplinks2">
                        <ul>
                            <li><a href="new-products.php"><img src="themes/prestashop/img/ab1.jpg" /></a></li>
                            <li><a href="best-sales.php"><img src="themes/prestashop/img/ab2.jpg" /></a></li>
                            <li><a href="random-products.php"><img src="themes/prestashop/img/ab3.jpg" /></a></li>
                        </ul>
                    </div>
                {/if} 
                {if $page_name == "category" && $smarty.get.id_category == "26"}
                    <div class="toplinks2">
                        <ul>
                        </ul>
                    </div>
                {/if}
                <div id="columns">
                    <div id="safa">&nbsp;</div>
                    <!-- Left -->
                    {if $page_name == "category" && $smarty.get.id_category != "26"}
                        <div id="left_column" class="column">
                            {$HOOK_LEFT_COLUMN}
                        </div>
                    {/if}
                    {if $page_name == "product" or $page_name == "search" or $page_name == "new-products" or $page_name == "best-sales" or $page_name == "random-products"}
                        <div id="left_column" class="column">
                            {$HOOK_LEFT_COLUMN}
                        </div>
                    {/if}
                    <!-- Center -->
                    <div id="center_column">
                    {/if}