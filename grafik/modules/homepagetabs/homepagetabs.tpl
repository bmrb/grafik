 <!--- Homepage tabs -->
 <style>
 .hpt_descproduct
 {ldelim}
 	min-height: {$tab_min_height}px;
	height: {$tab_min_height}px;
 {rdelim}
 ul.hpt_tabbernav li a {ldelim}
	background: url('{$modulepath}img/{$tab_bg_image}') repeat-x;
{rdelim}

.hpt_tab_on {ldelim}
	float: left;
	width: 128px;
	height: 28px;
	background: url('{$modulepath}img/{$tab_bg_image}') repeat-x;
	overflow: hidden;
{rdelim}

.hpt_tab_off {ldelim}
	float: left;
	width: 128px;
	height: 28px;
	background: url('{$modulepath}img/wt_bg.gif') repeat-x;
	overflow:hidden;
{rdelim}

#hpt_tab_header {ldelim}
	margin-top: 20px;
	height: 28px;
/*	background: url('../img/p_tab_bg.png') no-repeat bottom center;*/
	overflow:hidden;
{rdelim}
</style>
 <script>
{literal}
 
$(document).ready(function() {
	$('.hpt_tab').click(function () {
		$(this).addClass('hpt_tab_on');
		$(this).removeClass('hpt_tab_off');
		$(this).attr('click','on');
		ctab = $(this);
		$('.hpt_tab').each(function(j, otab) {
			if ($(ctab).attr('id') != $(otab).attr('id'))
			{
				$(otab).removeClass('hpt_tab_on');
				$(otab).addClass('hpt_tab_off');
				$(otab).attr('click','');
				$('#'+$(otab).attr('id')+'_cont').removeClass('hpt_tab_cont_on');
				$('#'+$(otab).attr('id')+'_cont').addClass('hpt_tab_cont_off');
			}
		});
		$('#'+$(this).attr('id')+'_cont').removeClass('hpt_tab_cont_off');
		$('#'+$(this).attr('id')+'_cont').addClass('hpt_tab_cont_on');
	});

	$('.hpt_tab').mouseover(function () {
		$(this).addClass('hpt_tab_on');
		$(this).removeClass('hpt_tab_off');
	});

	$('.hpt_tab').mouseout(function () {
		if ($(this).attr('click') != 'on')
		{
			$(this).addClass('hpt_tab_off');
			$(this).removeClass('hpt_tab_on');
		}
	});	
	
});
{/literal}
</script>
<link rel="stylesheet" href="{$modulepath}css/hometabs.css" TYPE="text/css" MEDIA="screen">
 <div id="hpt_tab_cont">
	<div id="hpt_tab_header">
		{foreach from=$tab_array_tab item=tab_tab name=myLoop}
			{if $tab_tab.tpl != ''}
				{if !$smarty.foreach.myLoop.first}
					<div class="hpt_tab_buf">&nbsp;</div>
				{/if}
				<div id="hpt_tab_{$smarty.foreach.myLoop.index}" {if $smarty.foreach.myLoop.first}click="on"{/if} class="hpt_tab hpt_tab_{if $smarty.foreach.myLoop.first}on{else}off{/if}">
					<div class="hpt_tab_text">{$tab_tab.tabname|escape:'htmlall':'UTF-8'}</div>
				</div>
			{/if}
		{/foreach}
	</div>
	<div id="hpt_tab_cont_cont">
		{foreach from=$tab_array_tab item=tab_tab name=myLoop}
			{if $tab_tab.tpl != ''}
				<div id="hpt_tab_{$smarty.foreach.myLoop.index}_cont" class="hpt_tab_cont_{if $smarty.foreach.myLoop.first}on{else}off{/if}">
					{$tab_tab.tpl}
				</div>
			{/if}
		{/foreach}
	</div>
</div>


<!--- Homepage tabs -->

 

 