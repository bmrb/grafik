<!-- Top sellers  -->
 <div class="hpt_productbox">
 {if isset($best_sellers) AND $best_sellers}
  		  {foreach from=$best_sellers item=product name=myLoop}
			<div class="ajax_block_product hpt_eachproduct" {if $smarty.foreach.myLoop.index != 0 && $smarty.foreach.myLoop.index % 4 == 0}Style="clear:both"{/if}>
			 <a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
			 <div class="hpt_descproduct">
				<b><a href="{$product.link}" title="{$product.name|truncate:$titlechars:'...'|escape:'htmlall':'UTF-8'}">{$product.name|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$titlechars:'...'|escape:'htmlall':'UTF-8'}</a></b>
				<br />
			 	{if $desctype == 1}
				{$product.description_short|strip_tags:'UTF-8'|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$desclen}
				{else}									 
				{$product.description|strip_tags:'UTF-8'|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$desclen}
				{/if}
				<div>
			</div>	 

			</div>
			<div class="hpt_pricediv"><span class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if} </span></span></div>		

			{if $buttonstylecart == 1 || $buttonstyleview == 1}
				<div class="hpt_buttonpair">	
				{if $buttonstyleview == 1}
				<a class="button" href="{$product.link}" title="{l s='View' mod='homepagetabs'}">{l s='View' mod='homepagetabs'}</a> 
				{/if}
				{if $buttonstylecart == 1} 
				<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$base_dir}cart.php?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homepagetabs'}">{l s='Add to cart' mod='homepagetabs'}</a>
				{/if}
				</div>
			{/if}		
		</div>
 		{/foreach}		 
	{else}
        <p>{l s='No Best Sellers Available' mod='homepagetabs'} </p>
	{/if}	
 </div> <div style="clear:both;"></div>
 <!-- /Top sellers -->