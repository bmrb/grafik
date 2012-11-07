<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 19:38:50
         compiled from "C:\wamp\www\grafik/modules/imagepreview/imagepreview-fancybox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78774f8c673a7cd563-11818983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c9e876251d004bef1d27f91e775d43aacf8b5f' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/modules/imagepreview/imagepreview-fancybox.tpl',
      1 => 1323436214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78774f8c673a7cd563-11818983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/imgPreview.js"> </script>  
<script type="text/javascript">

  function runImgPreview() {
   
     if($('ul#product_list a.product_img_link').size()>0 || $('#featured-products_block_center a.product_image').size()>0||$('.hpt_productbox a.product_image').size()>0)
     {
       $('ul#product_list a.product_img_link, #featured-products_block_center a.product_image, .hpt_productbox a.product_image').each(
               function(intIndex){
                 var imgLink=$(this).find('img').attr('src').replace('home','large');
                 $(this).attr('rel',imgLink);
               });
               
       $('ul#product_list a.product_img_link, #featured-products_block_center a.product_image, .hpt_productbox a.product_image').imgPreview({
              containerID:'imgPreviewWithStyles',
              imgCSS:{ 
                height:300 
              },
              onShow:function(link){
                
                $(link).stop().animate({opacity:0.6}, 'fast');
                $('img',this).stop().css({opacity:0});
                
                $('<center id="titleproduct" style="display:none;"><table cellspacing="0" cellpadding="0" id="fancybox-title-float-wrap">'+
                '<tbody ><tr ><td id="fancybox-title-float-left"></td>'+' <td id="fancybox-title-float-main">'+$(link).attr('title').substring(0,35)+'</td>'+
                ' <td id="fancybox-title-float-right"></td>'+'</tr></tbody></table></center>').appendTo(this);
              },
              onLoad:function(){
                $(this).animate({opacity:1},300);
                $('#titleproduct').css("display","block");
              },
              onHide:function(link){
                $(link).stop().animate({opacity:1},'fast');
                $('#titleproduct',this).remove();
              }
          });
       }
  }
    
    $(document).ready(function(){
      runImgPreview();
    });
 
 
</script>
<style>
#imgPreviewWithStyles {
    padding: 15px;
    z-index: 999;
    border: none;
}

.loading {
  
    background:url("<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
img/6.gif") no-repeat scroll center center #413f3f;
  
  width: 14px;
  height: 14px!important;
  margin-left:120px;
  margin-top:120px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
 }
.loading img {height: 14px!important;}
ul#product_list img{zoom:1;}

#fancybox-title-float-wrap {
    border: medium none;
    border-collapse: collapse;
    width: auto; 
    color: #FFFFFF;
}
#fancybox-title-float-wrap td {
    border: medium none;
    white-space: nowrap;
}
#fancybox-title-float-left {
     background: url("<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png") no-repeat scroll -40px -90px transparent;  
    padding: 0 0 0 15px;
}
#fancybox-title-float-main {
      background: url("<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox-x.png") repeat scroll 0 -40px transparent;  
    color: #FFFFFF;
    font-weight: bold;
    line-height: 29px;
    padding: 0 0 3px;
}
#fancybox-title-float-right {
      background: url("<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png") no-repeat scroll -55px -90px transparent;   
    padding: 0 0 0 15px;
}

.fancybox-bg {
  position: absolute;
  padding: 0;
  margin: 0;
  border: 0;
  width: 20px;
  height: 20px;
  z-index: 1001;
}

#fancybox-bg-n {
  top: -20px;
  left: 0;
  width: 100%;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox-x.png');  
}

#fancybox-bg-ne {
  top: -20px;
  right: -20px;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png');  
  background-position: -40px -162px;
}

#fancybox-bg-e {
  top: 0;
  right: -20px;
  height: 100%;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox-y.png');  
  background-position: -20px 0px;
}

#fancybox-bg-se {
  bottom: -20px;
  right: -20px;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png'); 
  background-position: -40px -182px; 
}

#fancybox-bg-s {
  bottom: -20px;
  left: 0;
  width: 100%;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox-x.png'); 
  background-position: 0px -20px;
}

#fancybox-bg-sw {
  bottom: -20px;
  left: -20px;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png'); 
  background-position: -40px -142px;
}

#fancybox-bg-w {
  top: 0;
  left: -20px;
  height: 100%;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox-y.png'); 
}

#fancybox-bg-nw {
  top: -20px;
  left: -20px;
   background-image: url('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancybox.png'); 
  background-position: -40px -122px;
}

#fancybox-title {
  font-family: Helvetica;
  font-size: 12px;
  z-index: 1102;
}

#titleproduct{ margin-top:15px; }

#fancybox-wrap {position:relative;}

.fancybox-ie .fancybox-bg { background: transparent !important; }

.fancybox-ie #fancybox-bg-n {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_n.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-ne {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_ne.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-e {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_e.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-se {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_se.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-s {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_s.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-sw {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_sw.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-w {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_w.png', sizingMethod='scale');  }
.fancybox-ie #fancybox-bg-nw {  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
js/jquery/fancybox/fancy_shadow_nw.png', sizingMethod='scale');  }
  
</style>
