{if $smarty.get.id_category == "26"}
                <div>
<br /><div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px;">Credits<br /><br /></div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
Credits are the currency used to determine the price value of the artwork. You need to purchase credits to download all artwork. 
To purchase credits, you must have an account at GrafikStock. Credits cost less when you buy them in larger amounts. 
</div><br /><br /><br /><br />
<div>
<div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px; float:left;">Standard Account</div>
<div style="float:left; padding-left:485px; position:absolute; z-index:-555">
<img src="/grafik/themes/prestashop/img/creciz.jpg" />
</div>
<div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:520px; ">Extended Account</div>
</div>
<br />
<div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px; float:left">
Choose one of the four credit packages from the standard<br />
account starting from as low as $ 0.70. Ideal to start off or <br />
for your smaller projects.
</div>

<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:520px;">
Buy your credits in bulk from the extended account <br />
and save more.The best option for your on-going projects<br />
and daily or regular use.
</div>
</div>
<br /><br /><br /><br /><br />

<div style="padding-left:38px; float:left"><a href="{$link->getPageLink('cart.php')}?qty=1&amp;id_product=35&amp;token={$static_token}&amp;add">
<img src="/grafik/themes/prestashop/img/kredi1.jpg" /></a>
</div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi2.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi3.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi4.jpg" /></div>
<div style="padding-left:67px; float:left"><img src="/grafik/themes/prestashop/img/kredi5.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi6.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi7.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi8.jpg" /></div>
<div style="padding-top:250px;">
<img src="/grafik/themes/prestashop/img/creciz2.jpg" />
</div><br /><br />
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
The minimum credit purchase is 10 credits. Credits are valid for 1 year starting from the date of your purchase. 
There are no limitations on daily downloads.
</div>
<br /><div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px;">Payment methods available:<br /><br /></div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
Paypal (Visa, MasterCard,Visa Electron,Diners Club)
</div>
</div>


{/if}  
{if $page_name == "category" && $smarty.get.id_category != "26" or $page_name == "search" or $page_name == "new-products" or $page_name == "best-sales" or $page_name == "random-products"} 
    <div style="float:left">
    <br />
<div id="featured-products_block_center" class="block products_block">
	{if isset($products) AND $products}
		<div class="block_content">
			{assign var='liHeight' value=114}
			{assign var='nbItemsPerLine' value=7}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
			{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
			<ul style="height:{$ulHeight}px;">
			{foreach from=$products item=product name=homeFeaturedProducts}
				<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}clear{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">

					<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="110px" width="110px" alt="{$product.name|escape:html:'UTF-8'}" /></a>

                   
				</li>
                 
			{/foreach}
			</ul>
		</div>
        
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
<!--<div style="color:#989898; float:right; margin-right:4px; margin-top:20px;">Click here to view all details of your account<br />
<center><a href="my-account.php"><img style="margin-top:4px;" src="{$img_dir}myac.jpg" /></a></center>
</div>-->
</div>
{/if}