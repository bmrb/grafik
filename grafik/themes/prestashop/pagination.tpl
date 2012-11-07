{if $page_name == "category" && $smarty.get.id_category != "26" or $page_name == "search" or $page_name == "new-products" or $page_name == "best-sales"} 
	{if isset($smarty.get.id_category) && $smarty.get.id_category && isset($category)}
		{assign var='requestPage' value=$link->getPaginationLink('category', $category, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('category', $category, true, false, false, true)}
	{elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer && isset($manufacturer)}
		{assign var='requestPage' value=$link->getPaginationLink('manufacturer', $manufacturer, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('manufacturer', $manufacturer, true, false, false, true)}
	{elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier && isset($supplier)}
		{assign var='requestPage' value=$link->getPaginationLink('supplier', $supplier, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('supplier', $supplier, true, false, false, true)}
	{else}
		{assign var='requestPage' value=$link->getPaginationLink(false, false, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink(false, false, true, false, false, true)}
	{/if}
<ul class="pagination">
<li class="current" style="font-size:13px; color:#303236;"><span>Page: {$p|escape:'htmlall':'UTF-8'}&nbsp; of &nbsp;{$pages_nb|intval}</span></li>
		{if $p != 1}
			{assign var='p_previous' value=$p-1}
			<li id="pagination_previous"><a {$no_follow_text} href="{$link->goPage($requestPage, $p_previous)}">&nbsp;</a></li>
		{else}
			<li id="pagination_previous" class="disabled"><span>&nbsp;</span></li>
		{/if}
        
		{if $pages_nb > 1 AND $p != $pages_nb}
			{assign var='p_next' value=$p+1}
			<li id="pagination_next"><a {$no_follow_text} href="{$link->goPage($requestPage, $p_next)}">&nbsp;</a></li>
		{else}
			<li id="pagination_next" class="disabled"><span>&nbsp;</span></li>
		{/if}
</ul>
{/if}