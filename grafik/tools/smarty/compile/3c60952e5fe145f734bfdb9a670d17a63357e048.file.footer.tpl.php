<?php /* Smarty version Smarty-3.0.7, created on 2012-11-08 20:41:39
         compiled from "C:\xampp\htdocs\grafik\grafik/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6129509c1903e49049-75676536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c60952e5fe145f734bfdb9a670d17a63357e048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grafik\\grafik/themes/prestashop/footer.tpl',
      1 => 1352323124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6129509c1903e49049-75676536',
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
            <h4>GrafikStock.com</h4>
            <a href="/grafik/" class="homeinfolink">Home</a><br /> 
            <a href="/grafik/content/2-about-us" class="homeinfolink">About Us</a><br />
            <a href="/grafik/contact-form.php" class="homeinfolink">Contact & Support</a> <br />
        </div>
        <div class="home-info-box2">
            <h4>Information</h4>
            <a href="/grafik/content/1-faq" class="homeinfolink">FAQ</a><br />
            <a href="/grafik/content/3-agreements" class="homeinfolink">Agreements﻿</a><br />
            <a href="/grafik/content/6-credits" class="homeinfolink" href="">Credits</a><br />
            <a href="/grafik/content/5-secure-payment" class="homeinfolink">Secure payment</a> </div>
        <div class="home-info-box">
            <h4>Follow Us</h4>
            <ul style="float:right;">
                <li>
                    <a href="http://www.facebook.com/">
                        <img alt="facebook" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
facebook_icon.gif" width="24" height="24"></a>
                </li>
                <li>
                    <a href="http://www.twitter.com/">
                        <img src="https://twitter-badges.s3.amazonaws.com/t_logo-a.png" alt="Follow Outletfest on Twitter" width="24" height="24"/></a>
                </li>
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
                        <p><input type="text" name="email" size="18"  value="<?php if ($_smarty_tpl->getVariable('value')->value){?><?php echo $_smarty_tpl->getVariable('value')->value;?>
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
                            <option value="0"<?php if ($_smarty_tpl->getVariable('action')->value==0){?> selected="selected"<?php }?>>Subscribe</option>
                            <option value="1"<?php if ($_smarty_tpl->getVariable('action')->value==1){?> selected="selected"<?php }?>>Unsubscribe</option>
                        </select>
                        </p>
                    </form>
                </div>
            </div><!-- home-news-form -->
            <a href="/grafik/content/5-secure-payment"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
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

<?php }?>
</body>
</html>