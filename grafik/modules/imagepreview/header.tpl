        {if $tooltip == "true"}
        <link rel="stylesheet" type="text/css" href="{$modules_dir}imagepreview/css/imagepreview.css"/>
		<script type="text/javascript" src="{$modules_dir}imagepreview/js/jquery.jatt.js"></script>
        <script type="text/javascript">
		{literal}
 		$(document).ready(function(){
			var addRel = function(selector) {
    			$(selector).each(function() {
					var name = $(this).find("img").attr('src').replace("{/literal}{$imagetype}{literal}","large");
					$(this).addClass("screenshot {/literal}{if $sticky == "true"}sticky{/if}{literal}");
        			$(this).attr("rel", function() { 
    					return "" + name; 
					}); 
    			});
			};{/literal}
			addRel("{$addrel}");
			{literal}$.jatt({{/literal}
			direction: '{$direction}',
			followMouse: {$mouse},
			zIndex: {$zindex},
			speed: {$speed}
			{literal}
			});
  		});
		</script>
        <style type="text/css">
		#preview {{/literal}background-color:{$bgcolor};color:{$titlecolor}{literal}}{/literal}
		{if $sticky == "true"}
		{literal}#preview .close {display:block}{/literal}
		{/if}
		</style>
        {/if}