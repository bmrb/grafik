	<p><img src="{$content_dir}modules/homefeatured/aciz.jpg" /></p>
<table width="980px" border="0" cellpadding="0" cellspacing="0">
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
    <td scope="col" width="250px;"><!-- MODULE Home Featured Products -->
    <div style="float:left">
<div id="featured-products_block_center" class="block products_block">

    <p style="color:#989898; font-weight:normal; font-size:23px;">NEW ARTWORK</p>
	{if isset($products) AND $products}
		<div class="block_content">
			{assign var='liHeight' value=110}
			{assign var='nbItemsPerLine' value=3}
			{assign var='nbLi' value=$products|@count}
			{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
			{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
			<ul style="height:{$ulHeight}px;">
			{foreach from=$products item=product name=homeFeaturedProducts}
{if $smarty.foreach.products.index == 3}
    {break}
{/if}
				<li class="ajax_block_product {if $smarty.foreach.homeFeaturedProducts.first}first_item{elseif $smarty.foreach.homeFeaturedProducts.last}last_item{else}item{/if} {if $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 0}last_item_of_line{elseif $smarty.foreach.homeFeaturedProducts.iteration%$nbItemsPerLine == 1}clear{/if} {if $smarty.foreach.homeFeaturedProducts.iteration > ($smarty.foreach.homeFeaturedProducts.total - ($smarty.foreach.homeFeaturedProducts.total % $nbItemsPerLine))}last_line{/if}">

					<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_imagex"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="110px" width="110px" alt="{$product.name|escape:html:'UTF-8'}" /></a>
					<div>


					</div>
				</li>
			{/foreach}

			</ul>
                       <br />
       <a style="color:#989898; text-decoration:none; font-size:15px; text-align:center; margin-left:163px;" href="http://www.grafikstock.com/grafik/new-products">View all</a>
                        
		</div>
	{else}
		<p>{l s='No featured products' mod='homefeatured'}</p>
	{/if}
</div>
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
