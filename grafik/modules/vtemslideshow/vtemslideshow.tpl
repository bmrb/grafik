<!-- MODULE 1a1 slideshow -->
{if isset($images) AND $images}
	<script type="text/javascript" src="{$content_dir}modules/vtemslideshow/js/jquery.cycle.js"></script>
	<link href="{$content_dir}modules/vtemslideshow/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
   		$(document).ready(function(){ldelim}
        $('#vtemslideshow1').cycle({ldelim}
		      fx: '{$fx}',
			  timeout: {$timeout},
              speed: {$speed}, 
              next: '#cycle_next',
              prev: '#cycle_prev',
              pager: '#vtemnav',
              pagerEvent:   'click',
              pagerAnchorBuilder: pagerFactory,
			  startingSlide: {$startingSlide},
			  fit: {$fit},
			  height:{$height},
			  width: {$width}
		{rdelim});
		function pagerFactory(idx, slide){ldelim}
           return '#vtemnav a:eq(' + idx + ') span';
        {rdelim};
        {rdelim});
     </script>
    <div id="vtemslideshow_wapper" style="width:{$width}px; height:{$height}px;">
    <div id="vtemslideshow1" class="vtem_main_slideshow">
	{foreach from=$images item=image key=i}
		{if isset($image.name) AND $image.name}
		    {if isset($image.link) AND $image.link}
            <a href="{$image.link}" {if $i > 0}style="display:none"{/if}>
		    {/if}
			<img src="{$content_dir}modules/vtemslideshow/slides/{$image.name}" alt="{$image.name}" >
			{if isset($image.link) AND $image.link}</a>{/if}
		{/if}
	{/foreach}
	</div>

	</div>
					
{/if}<br /><br />

<table border="0" width="980px">
  <tr>
    <td scope="col"><b style="color:#36599C; font-size:17px; font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select your subscription plan</b><br /><br />
    <a href="{$base_dir_ssl}category.php?id_category=26"><img style="text-align:left" src="{$content_dir}modules/vtemslideshow/images/a1.jpg" alt="{$image.name}" ></a>
    </td>
    <td rowspan="2" scope="col">

		<div style="border: 0; text-align:left;">
			<form action="{$base_dir_ssl}authentication.php" method="post">
				<div style="text-align: left;">
					<div style="color:#36599C; font-size:12px">E-Mail Adress:</div>
					<div style=" width:249px; height:37px; background: url('http://www.grafikstock.com/grafik/img/theme/aback.jpg') no-repeat;"><input type="text" style="width:240px; height:29px; margin-left:3px; margin-top:3px; border-color:#36589B" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall'|stripslashes}{/if}"/></div><br />
					<div style="color:#36599C; font-size:12px; padding-bottom:2px;">Password:</div>
					<div style=" width:249px; height:37px; background: url('http://www.grafikstock.com/grafik/img/theme/aback.jpg') no-repeat;"><input type="password" style="width:240px; height:29px; margin-left:3px; margin-top:3px; border-color:#36589B" name="passwd" value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|escape:'htmlall'|stripslashes}{/if}"/></div><br />
					<input type="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />

                
<div style="text-align:left; margin-left:-10px;"><input type="submit" id="" name="SubmitLogin" value="Log in" style="background-color:transparent; background-image:url({$content_dir}modules/vtemslideshow/images/agiris.jpg); align:left; width:85px; height:33px; font-size:14px; color:#36599C; font-weight:normal; cursor:pointer; border:0px;"  /><p style=" text-indent:100px; margin-top:-30px; font-weight:normal;  color:#303235">
<a style="color:#303235; text-decoration:none" href="{$base_dir_ssl}authentication.php">Create an account</a></p>
<p style="text-indent:100px; font-weight:normal; color:#303235"><a style="color:#303235; text-decoration:none" href="{$base_dir_ssl}authentication.php">Forgot Your Password?</a></p>
</div></div>				
			</form>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$base_dir_ssl}category.php?id_category=26"><img src="{$content_dir}modules/vtemslideshow/images/abuy.png" /></a></div>
		</div>
    </td>
  </tr>
  <tr>
    <td><a href="{$base_dir_ssl}category.php?id_category=26"><img src="{$content_dir}modules/vtemslideshow/images/a2.jpg" alt="{$image.name}" ></a></td>
  </tr>
</table>
<!-- /MODULE 1a1 slideshow -->
