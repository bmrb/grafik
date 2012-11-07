{capture name=path}{l s='My account'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1>{l s='My account'}</h1>
<br />
<br />
<center>
<table width="640" border="0">
  <tr><br /><br /><br /><br /><br />
    <td>
    <a href="{$link->getPageLink('discount.php', true)}" title="{l s='Vouchers'}"><img src="{$img_dir}vouchers.jpg" alt="{l s='Vouchers'}" /></a><br />&nbsp;
    </td>
    <td>
    <a href="{$link->getPageLink('identity.php', true)}" title="{l s='Personal Information'}"><img src="{$img_dir}personal.jpg" alt="{l s='Personal Information'}" /></a><br />&nbsp;
    </td>
    <td>
    <a href="{$link->getPageLink('addresses.php', true)}" title="{l s='Adreses'}"><img src="{$img_dir}adress.jpg" alt="{l s='Adreses'}" /></a><br />&nbsp;
    </td><br /><br />
  </tr>
  <tr>
    <td>
    <a href="{$link->getPageLink('order-slip.php', true)}" title="{l s='Credits Slip'}"><img src="{$img_dir}credit.jpg" alt="{l s='Credits Slip'}" /></a>
    </td>
    <td>
    <a href="{$link->getPageLink('history.php', true)}" title="{l s='Order History'}"><img src="{$img_dir}orderh.jpg" alt="{l s='Order History'}" /></a>
    </td>
    <td>
    <a href="{$link->getPageLink('history.php', true)}" title="{l s='Downoad History'}"><img src="{$img_dir}downloadh.jpg" alt="{l s='Downoad History'}" /></a>
    </td>
  </tr>
</table>
</center>
{$HOOK_CUSTOMER_ACCOUNT}
<br /><br /><br /><br /><br /><br />
<p><img src="{$content_dir}modules/homefeatured/aciz.jpg" /></p><br /><br /><br /><br />
    <div style="float:left">
<div id="featured-products_block_center" class="block products_block" style="margin-left:40px; width:950px;">

    <p style="color:#989898; font-weight:normal; font-size:16px">NEW ARTWORKS</p>
	{if isset($products) AND $products}
		<div class="block_content">
			{assign var='liHeight' value=110}
			{assign var='nbItemsPerLine' value=7}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
			{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
			<ul style="height:{$ulHeight}px;">
			{foreach from=$products item=product name=homeFeaturedProducts}
				<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}clear{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">

					<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_imagex"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="110px" width="110px" alt="{$product.name|escape:html:'UTF-8'}" /></a>
					<div>


					</div>
				</li>
			{/foreach}
			</ul>
		</div><br />
        <a style="color:#989898; font-weight:normal; font-size:14px; text-decoration:none; float:right; margin-right:75px" href="{$base_dir_ssl}new-products">View all</a>
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
</div>
<div>&nbsp;</div><br />
<div>&nbsp;</div><br />
<div>&nbsp;</div><br />
<p><img src="{$content_dir}modules/homefeatured/aciz.jpg" /></p>
<table width="980" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td scope="col" width="350px;">
    <div style="width:330px; margin-top:0px;">
    <div style="float:left; color:#989898; margin-left:5px; font-size:15px;">Artwork types</div><div style="float:left; margin-left:32px; color:#989898; font-size:15px;">Categories</div><br /><br />
        <div style="float:left; margin-right:10px;"><img src="{$content_dir}modules/homefeatured/aciz2.jpg" /></div>
    <div style="float:left; color:#36599C">
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}search.php?tag=graphic library">graphic library</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}44-labels-tags">labels & tags</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}45-all-over-print">all over print</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}46-shapes">shapes</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}47-technical-card">technical cards</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}48-washing-symbol">washing symbol</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}49-graphics-for-manufacturig">graphics for<br /> manufacturing</a><br />
 </div>
    <div style="float:left; margin-left:10px;"><img src="{$content_dir}modules/homefeatured/aciz2.jpg" /></div>

    <div style="float:left; margin-left:10px; color:#36599C">
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}38-womenswear">womenswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}39-menswear">menswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}40-kidswear">kidswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}41-streetwear">streetwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}42-beachwear">beachwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}43-casualwear">casualwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}4-vintage">vintage</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="{$base_dir_ssl}5-music">music</a><br />


    </div>
    <div style="float:left; margin-left:10px;"><img src="{$content_dir}modules/homefeatured/aciz2.jpg" /></div>
    
    </div>
    </td>
    <td scope="col" width="326px;">
    <div style="float:left; width:265px; height:110px; background: url({$content_dir}modules/homefeatured/aneed.jpg) no-repeat;">
    <div style=" margin-left:15px; margin-top:22px"><a href="/grafik/contact-form.php"><img src="{$content_dir}modules/homefeatured/aneedc.jpg" /></a></div>
    </div>
    
    </td>
  </tr>
</table>

<!-- /MODULE Home Featured Products -->
