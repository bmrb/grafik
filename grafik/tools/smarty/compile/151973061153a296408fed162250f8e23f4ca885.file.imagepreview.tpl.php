<?php /* Smarty version Smarty-3.0.7, created on 2012-08-11 15:49:17
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/imagepreview/imagepreview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772649097502670ed42b307-06318046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151973061153a296408fed162250f8e23f4ca885' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/imagepreview/imagepreview.tpl',
      1 => 1335918416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772649097502670ed42b307-06318046',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
js/imgPreview.js"> </script>  
<script type="text/javascript">

  var imageType   = '<?php echo $_smarty_tpl->getVariable('Preview_imageType')->value;?>
';
  var imageHeight = <?php echo $_smarty_tpl->getVariable('Preview_imageHeight')->value;?>
;
  
  
    $(document).ready(function() { 
      
   if( $('ul#product_list a.product_img_link').size() > 0 || $('#featured-products_block_center a.product_image').size() > 0) 
   {  
      
        $('ul#product_list a.product_img_link, #featured-products_block_center a.product_image').each( function( intIndex ){
          var imgLink = $(this).find('img').attr('src').replace('home', imageType);
  
          $(this).attr('rel', imgLink);
        });
        
        $('ul#product_list a.product_img_link, #featured-products_block_center a.product_image').imgPreview({
            containerID: 'imgPreviewWithStyles',
            imgCSS: {
                // Limit preview size:
                height: imageHeight
            },
            // When container is shown:
            onShow: function(link){
                // Animate link:
                $(link).stop().animate({opacity:0.6}, 'fast');
                // Reset image:
               $('img', this).stop().css({opacity:0});
  
                //add title
                $('<span style="display:none;" id="titleproduct">' + $(link).attr('title').substring(0,45) + '</span>').appendTo(this);
  
            },
            // When image has loaded:
            onLoad: function(){
                // Animate image
                $(this).animate({opacity:1}, 300);
  
                $('#titleproduct').css("display", "block");
            },
            // When container hides: 
            onHide: function(link){
                // Animate link:
                $(link).stop().animate({opacity:1}, 'fast');
                //remove link
                $('span', this).remove();
            }
        });
      
    }
 });  
</script>
<style>
#imgPreviewWithStyles {
  
    background:url("<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
img/<?php echo $_smarty_tpl->getVariable('Preview_preloader')->value;?>
.gif") no-repeat scroll center center <?php echo $_smarty_tpl->getVariable('Preview_imageColor')->value;?>
;
    -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
    border-radius: 10px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);
    padding: 10px;
    z-index: 999;
    border: none;
  
}
#imgPreviewWithStyles span {
  
    display:none;
    color: <?php echo $_smarty_tpl->getVariable('Preview_titleColor')->value;?>
;
    text-align: center;
    display: block;
    padding: 5px 0 0 0;
 
}

.loading {height: 50px;width: 50px;}
ul#product_list img{zoom:1;}
  
</style>