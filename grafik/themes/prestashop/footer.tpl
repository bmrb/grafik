{if !$content_only}

</div>
<!-- Right -->
<!-- Footer -->

<div id="footer">
    <div class="home-info-container">
        <div class="home-info-box-security">
            <a href="{$base_url}category.php?id_category=8"><img src="{$img_dir}secure.gif" /></a>
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
                        <img alt="facebook" src="{$img_dir}facebook_icon.gif" width="24" height="24"></a>
                </li>
                <li>
                    <a href="http://www.twitter.com/">
                        <img src="https://twitter-badges.s3.amazonaws.com/t_logo-a.png" alt="Follow Outletfest on Twitter" width="24" height="24"/></a>
                </li>
                <li><a href=""><img alt="blog" src="{$img_dir}rss_icon.gif"></a></li>
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
                    {if $msg}
                        <p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
                    {/if}
                    <form action="{$base_dir}" method="post">
                        <p><input type="text" name="email" size="18"  value="{if $value}{$value}{else}{l s='e-mail adress' mod='blocknewsletter'}{/if}" onfocus="javascript:if(this.value=='{l s='e-mail adress' mod='blocknewsletter'}')this.value='';" onblur="javascript:if(this.value=='')this.value='{l s='e-mail adress' mod='blocknewsletter'}';" />
                        <input type="submit" value="Submit" class="button_small_cart" name="submitNewsletter" />
                        <select style="	margin-left: 0em;
                                margin-top:2px;
                                font-weight:normal;
                                height:19px;
                                font-size: 12px;
                                font-family: Verdana, Arial, Helvetica, Sans-Serif;
                                outline: none" name="action">
                            <option value="0"{if $action == 0} selected="selected"{/if}>Subscribe</option>
                            <option value="1"{if $action == 1} selected="selected"{/if}>Unsubscribe</option>
                        </select>
                        </p>
                    </form>
                </div>
            </div><!-- home-news-form -->
            <a href="/grafik/content/5-secure-payment"><img src="{$img_dir}nav_cards.png" /></a>
        </div><!-- home-news-box -->


    </div><!-- home-info-container -->  
    <script language="javascript" type="text/javascript" >
        var hideImages = {$hideImages};
        var hideShortDesc = {$hideShortDesc};
        var hideBuyBlock = {$hideBuyBlock};
        var hideColorPicker = {$hideColorPicker};
        var hideQuantityDiscount= {$hideQuantityDiscount};
        var hideMoreInfo = {$hideMoreInfo};

        var ispaid = {$ispaid};
        var repurchase = {$repurchase};
        var istoken = {$istoken};
        var cfmmsg = "{$cfmmsg}";
    </script>
    <script language="javascript" type="text/javascript" src="{$base_dir}/modules/agileprepaidcredit/footer.js"></script>
</div>

{/if}
</body>
</html>