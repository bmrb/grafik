<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 19:40:18
         compiled from "C:\wamp\www\grafik/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143294f8c67921cd381-82015578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ceb433c9ab31032bb7abec021e40cd0f2680f9' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/themes/prestashop/footer.tpl',
      1 => 1333686968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143294f8c67921cd381-82015578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>

			</div>



<!-- Right -->

	



<!-- Footer -->

		<div id="footer">

  <div class="home-info-container">

    <div class="home-info-box-security">

        <a href="<?php echo $_smarty_tpl->getVariable('base_url')->value;?>
category.php?id_category=8"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
secure.gif" /></a>

    </div>

 

  <div class="home-info-box">

   <h4>About Us</h4>

    <a href="/grafik/cms.php?id_cms=1" class="homeinfolink">Legal Notice</a><br /> 

    <a href="/grafik/cms.php?id_cms=4" class="homeinfolink">About Us</a><br />

    <a href="/grafik/contact-form.php" class="homeinfolink">Contact</a> <br />

    <a class="homeinfolink" href="">About Us
    </a>
   <a class="homeinfolink" title="outlet" href="">About Us</a>

  </div>



  <div class="home-info-box2">

  <h4>Customer Support</h4>

    <a href="" class="homeinfolink">About Us</a><br />

    <a href="" class="homeinfolink">About Us</a><br />

    <a href="" class="homeinfolink">About Us</a> <br />

    <a class="homeinfolink" href="">
    About Us</a></div>



  <div class="home-info-box">

  <h4>Follow Us</h4>

  <ul style="float:right;">

			<li>
            <a href="http://www.facebook.com/">
            <img alt="facebook" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
facebook_icon.gif" width="24" height="24"></a></li>

     	<li><a href="http://www.twitter.com/">
        <img src="https://twitter-badges.s3.amazonaws.com/t_logo-a.png" alt="Follow Outletfest on Twitter" width="24" height="24"/></a></li>

      <li><a href=""><img alt="blog" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
rss_icon.gif"></a></li>

  </ul>

    &nbsp;<div class="clear"></div>

    <p>

            	&copy;GrafikStock.Com &nbsp; <br>

				

            </p>

    

 

  </div>



  <div class="home-news-box">

  <div class="home-news-form">

	

	<h4 style="color:#0960AB;">Newsletter</h4>

	<div class="block_content">

	<?php if ($_smarty_tpl->getVariable('msg')->value){?>

		<p class="<?php if ($_smarty_tpl->getVariable('nw_error')->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</p>

	<?php }?>

		<form action="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" method="post">

			<p><input type="text" name="email" size="18" value="<?php if ($_smarty_tpl->getVariable('value')->value){?><?php echo $_smarty_tpl->getVariable('value')->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'e-mail adress','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'e-mail adress','mod'=>'blocknewsletter'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'e-mail adress','mod'=>'blocknewsletter'),$_smarty_tpl);?>
';" />

      	 <input type="submit" value="Submit" class="button_small_cart" name="submitNewsletter" />

        <select style="	margin-left: 0em;
        margin-top:2px;
        font-weight:normal;
        height:19px;
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, Sans-Serif;
	outline: none" name="action">

					<option value="0"<?php if ($_smarty_tpl->getVariable('action')->value==0){?> selected="selected"<?php }?>>Subscripe</option>

					<option value="1"<?php if ($_smarty_tpl->getVariable('action')->value==1){?> selected="selected"<?php }?>>Unsubscripe</option>

				</select>

        

       

      </p>

	

		</form>

	</div>



		

		

  </div><!-- home-news-form -->

               <a href="#"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
nav_cards.png" /></a>

  </div><!-- home-news-box -->



</div><!-- home-info-container -->  

  
	
<script language="javascript" type="text/javascript" >
var hideImages = <?php echo $_smarty_tpl->getVariable('hideImages')->value;?>
;
var hideShortDesc = <?php echo $_smarty_tpl->getVariable('hideShortDesc')->value;?>
;
var hideBuyBlock = <?php echo $_smarty_tpl->getVariable('hideBuyBlock')->value;?>
;
var hideColorPicker = <?php echo $_smarty_tpl->getVariable('hideColorPicker')->value;?>
;
var hideQuantityDiscount= <?php echo $_smarty_tpl->getVariable('hideQuantityDiscount')->value;?>
;
var hideMoreInfo = <?php echo $_smarty_tpl->getVariable('hideMoreInfo')->value;?>
;

var ispaid = <?php echo $_smarty_tpl->getVariable('ispaid')->value;?>
;
var repurchase = <?php echo $_smarty_tpl->getVariable('repurchase')->value;?>
;
var istoken = <?php echo $_smarty_tpl->getVariable('istoken')->value;?>
;
var cfmmsg = "<?php echo $_smarty_tpl->getVariable('cfmmsg')->value;?>
";
</script>

<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
/modules/agileprepaidcredit/footer.js"></script>
	

		</div>

	<?php }?></body></html>
