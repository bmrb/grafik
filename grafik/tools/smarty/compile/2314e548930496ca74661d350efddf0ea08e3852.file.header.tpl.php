<?php /* Smarty version Smarty-3.0.7, created on 2012-11-08 20:41:38
         compiled from "C:\xampp\htdocs\grafik\grafik/themes/prestashop/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7427509c1902267ef5-54798955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2314e548930496ca74661d350efddf0ea08e3852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grafik\\grafik/themes/prestashop/header.tpl',
      1 => 1352407159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7427509c1902267ef5-54798955',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\grafik\grafik\tools\smarty\plugins\modifier.escape.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getVariable('lang_iso')->value;?>
">
    <head>
        <title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value,'htmlall','UTF-8');?>
</title>
        <?php if (isset($_smarty_tpl->getVariable('meta_description',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_description')->value){?>
            <meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value,'html','UTF-8');?>
" />
        <?php }?>
        <?php if (isset($_smarty_tpl->getVariable('meta_keywords',null,true,false)->value)&&$_smarty_tpl->getVariable('meta_keywords')->value){?>
            <meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value,'html','UTF-8');?>
" />
        <?php }?>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <meta name="generator" content="<?php echo $_smarty_tpl->getVariable('category')->value->id;?>
" />
        <meta name="robots" content="<?php if (isset($_smarty_tpl->getVariable('nobots',null,true,false)->value)){?>no<?php }?>index,follow" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" />
        <script type="text/javascript">
                    var baseDir = '<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
';
                    var static_token = '<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
';
                    var token = '<?php echo $_smarty_tpl->getVariable('token')->value;?>
';
                    var priceDisplayPrecision = <?php echo $_smarty_tpl->getVariable('priceDisplayPrecision')->value*$_smarty_tpl->getVariable('currency')->value->decimals;?>
;
                    var priceDisplayMethod = <?php echo $_smarty_tpl->getVariable('priceDisplay')->value;?>
;
                    var roundMode = <?php echo $_smarty_tpl->getVariable('roundMode')->value;?>
;
        </script>
        <?php if ($_smarty_tpl->getVariable('page_name')->value=="product"||$_smarty_tpl->getVariable('page_name')->value=="search"||$_smarty_tpl->getVariable('page_name')->value=="random-products"||$_smarty_tpl->getVariable('page_name')->value=="new-products"||$_smarty_tpl->getVariable('page_name')->value=="best-sales"||$_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']!="26"||$_smarty_tpl->getVariable('page_name')->value=="random-products"){?>
            <link href="themes/prestashop/css/global2.css" rel="stylesheet" type="text/css" media="all" />
        <?php }else{ ?>
            <link href="themes/prestashop/css/global.css" rel="stylesheet" type="text/css" media="all" />
        <?php }?>
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
        <?php if (isset($_smarty_tpl->getVariable('js_files',null,true,false)->value)){?>
            <?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('js_files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
?>
                <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
            <?php }} ?>
        <?php }?>
        <?php echo $_smarty_tpl->getVariable('HOOK_HEADER')->value;?>

    </head>
    <body <?php if ($_smarty_tpl->getVariable('page_name')->value){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page_name')->value,'htmlall','UTF-8');?>
"<?php }?>>
        <?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
            <?php if (isset($_smarty_tpl->getVariable('restricted_country_mode',null,true,false)->value)&&$_smarty_tpl->getVariable('restricted_country_mode')->value){?>
                <div id="restricted-country">
                    <p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->getVariable('geolocation_country')->value;?>
</span></p>
                </div>
            <?php }?>
            <div id="page">
                <div class="header_topsec"> 
                    <!-- Top Links -->
                    <div class="toplinks">
                        <ul>
                            <?php if ($_smarty_tpl->getVariable('logged')->value){?>
                                <li><a href="my-account.php">My Account<em class="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>&nbsp;&nbsp;&nbsp;</a></li>
                            <?php }else{ ?>
                                <li><a href="authentication.php">Subscribe<em class="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>&nbsp;&nbsp;&nbsp;</a></li>
                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('logged')->value){?>
                                <li><a>&nbsp;&nbsp;&nbsp;
                                        Hi, <?php echo $_smarty_tpl->getVariable('cookie')->value->customer_firstname;?>
 <?php echo $_smarty_tpl->getVariable('cookie')->value->customer_lastname;?>

                                        &nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="26-credits">
                                        Credits left: <?php echo $_smarty_tpl->getVariable('balance')->value;?>


                                    </a>
                                </li>
                                <li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
?mylogout">&nbsp;&nbsp;&nbsp;
                                        Sign Out
                                        &nbsp;&nbsp;&nbsp;</a></li>
                                    <?php }else{ ?>
                                <li><a href="authentication.php">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Sign in
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <!-- Right sec -->
                </div>
                <!-- Header -->
                <div id="header">
                    <a id="header_logo" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('index.php');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
">
                        <img class="logo" src="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
logo.jpg?<?php echo $_smarty_tpl->getVariable('img_update_time')->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('shop_name')->value,'htmlall','UTF-8');?>
" <?php if ($_smarty_tpl->getVariable('logo_image_width')->value){?>width="<?php echo $_smarty_tpl->getVariable('logo_image_width')->value;?>
"<?php }?> <?php if ($_smarty_tpl->getVariable('logo_image_height')->value){?>height="<?php echo $_smarty_tpl->getVariable('logo_image_height')->value;?>
" <?php }?> />
                    </a>
                    <div id="header_right">
                        <?php echo $_smarty_tpl->getVariable('HOOK_TOP')->value;?>

                    </div>
                </div>
                <?php if ($_smarty_tpl->getVariable('page_name')->value=="product"||$_smarty_tpl->getVariable('page_name')->value=="search"||$_smarty_tpl->getVariable('page_name')->value=="new-products"||$_smarty_tpl->getVariable('page_name')->value=="best-sales"||$_smarty_tpl->getVariable('page_name')->value=="random-products"){?>

                    <div class="toplinks2">
                        <ul>
                            <li><a href="new-products.php"><img src="themes/prestashop/img/ab1.jpg" /></a></li>
                            <li><a href="best-sales.php"><img src="themes/prestashop/img/ab2.jpg" /></a></li>
                            <li><a href="random-products.php"><img src="themes/prestashop/img/ab3.jpg" /></a></li>
                        </ul>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']!="26"){?>
                    <div class="toplinks2">
                        <ul>
                            <li><a href="new-products.php"><img src="themes/prestashop/img/ab1.jpg" /></a></li>
                            <li><a href="best-sales.php"><img src="themes/prestashop/img/ab2.jpg" /></a></li>
                            <li><a href="random-products.php"><img src="themes/prestashop/img/ab3.jpg" /></a></li>
                        </ul>
                    </div>
                <?php }?> 
                <?php if ($_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']=="26"){?>
                    <div class="toplinks2">
                        <ul>
                        </ul>
                    </div>
                <?php }?>
                <div id="columns">
                    <div id="safa">&nbsp;</div>
                    <!-- Left -->
                    <?php if ($_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']!="26"){?>
                        <div id="left_column" class="column">
                            <?php echo $_smarty_tpl->getVariable('HOOK_LEFT_COLUMN')->value;?>

                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('page_name')->value=="product"||$_smarty_tpl->getVariable('page_name')->value=="search"||$_smarty_tpl->getVariable('page_name')->value=="new-products"||$_smarty_tpl->getVariable('page_name')->value=="best-sales"||$_smarty_tpl->getVariable('page_name')->value=="random-products"){?>
                        <div id="left_column" class="column">
                            <?php echo $_smarty_tpl->getVariable('HOOK_LEFT_COLUMN')->value;?>

                        </div>
                    <?php }?>
                    <!-- Center -->
                    <div id="center_column">
                    <?php }?>