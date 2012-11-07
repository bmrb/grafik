
{include file="$tpl_dir./errors.tpl"}

{if isset($category)}
<!--{$category->id}-->
	{if $category->id AND $category->active}


		{if $products}
        				{include file="$tpl_dir./pagination.tpl"}
				{include file="$tpl_dir./product-compare.tpl"}
				{include file="$tpl_dir./product-list.tpl" products=$products}
				{include file="$tpl_dir./product-compare.tpl"}

			{elseif !isset($subcategories)}
				<p class="warning">{l s='There are no products in this category.'}</p>
			{/if}
	{elseif $category->id}
		<p class="warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}