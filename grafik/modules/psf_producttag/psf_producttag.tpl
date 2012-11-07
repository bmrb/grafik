{if $tags|@count > 0}
	<div id="psf_producttag">
	-
	{foreach from=$tags item=tag name=tags}
		<a href='{$base_dir}search.php?tag={$tag->name|urlencode}' alt='{l s='More about' mod='psf_producttag'} {$tag->name|escape:htmlall:'UTF-8'}'>{$tag->name|escape:htmlall:'UTF-8'}</a>&nbsp;-
	{/foreach}
	</div>
{/if}