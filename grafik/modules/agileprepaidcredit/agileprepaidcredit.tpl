<div id="agileprepaidcredit" class="block">
	<h4>{l s='Token Packages' mod='agileprepaidcredit'}</h4>
    {foreach from=$tokenpkgs item=tokenpkg}
	<div class="block_content">
	    <div>
   		<a href="{$base_dir}product.php?id_product={$tokenpkg.product->id|intval}">
          	<span>{$tokenpkg.product->name}</span><br />
          	<span class="price">{l s='Price' mod='agileprepaidcredit'}&nbsp;{convertPrice price=$tokenpkg.product->price}</span><br />
          	<p>
          	{$tokenpkg.product->description_short}
          	</p>
		</a> 
   		<a href="{$base_dir}product.php?id_product={$tokenpkg.product->id|intval}">
   			<img src="{$link->getImageLink($tokenpkg.product->link_rewrite, $tokenpkg.cover.id_image, 'large')}" width="180" height="180" />
		</a> 
		<br /><br />
	    </div>
	</div>
	<hr />
	{/foreach}
</div>
<!-- /Block tags module -->
