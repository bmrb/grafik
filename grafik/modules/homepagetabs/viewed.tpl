<!-- Block Viewed products -->
 <div class="hpt_productbox">
 {if isset($productsViewedObj) AND $productsViewedObj}
  		 {foreach from=$productsViewedObj item=product name=myLoop}
			<div class="ajax_block_product hpt_eachproduct" {if $smarty.foreach.myLoop.index != 0 && $smarty.foreach.myLoop.index % 4 == 0}Style="clear:both"{/if}>
			 <a class="product_image" href="{$link->getProductLink($product->id, $product->link_rewrite,$product->category_rewrite)}" title="{l s='More about' mod='blockviewed'}{$product->name|escape:html:'UTF-8'}"><img src="{$link->getImageLink($product->link_rewrite, $product->cover, 'home')}" height="{$homeSize.height}"  width="{$homeSize.width}" alt="{$product->legend|escape:html:'UTF-8'}" /></a>
			 <div class="hpt_descproduct">
				<b><a  href="{$link->getProductLink($product->id, $product->link_rewrite, $product->category_rewrite)}" title="{l s='More about' mod='blockviewed'} {$product->name|escape:html:'UTF-8'}">{$product->name|escape:html:'UTF-8'|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$titlechars:'...'}</a></b>
				<br />
				{if $desctype == 1}
				{$product->description_short|strip_tags:'UTF-8'|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$desclen}
				{else}									 
				{$product->description|strip_tags:'UTF-8'|replace:'  ':' '|replace:'\n':''|replace:'\r':''|trim|truncate:$desclen}
				{/if}
				<div>
				</div>	 
			</div>
			<div class="hpt_pricediv"><span class="price_container"><span class="price">  {if !$priceDisplay}{convertPrice price=$product->price}{else}{convertPrice price=$product->price_tax_exc}{/if}  </span></span></div>		
		 	    {if $buttonstylecart == 1 || $buttonstyleview == 1}
				<div class="hpt_buttonpair">	
				{if $buttonstyleview == 1}
				<a class="button" href="{$product->link}" title="{l s='View' mod='homepagetabs'}">{l s='View' mod='homepagetabs'}</a> 
				{/if}
				{if $buttonstylecart == 1} 
				<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product->id}" href="{$base_dir}cart.php?qty=1&amp;id_product={$product->id}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homepagetabs'}">{l s='Add to cart' mod='homepagetabs'}</a>
				{/if}
				</div>
				{/if}			
		</div>
 		{/foreach}		 
	{else}
        <p>{l s='No Viewed products' mod='homepagetabs'} </p>
	{/if}	
 </div> <div style="clear:both;"></div>
<!-- Block Viewed products -->