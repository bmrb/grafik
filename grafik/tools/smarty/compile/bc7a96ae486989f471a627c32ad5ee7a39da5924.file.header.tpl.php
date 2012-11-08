<?php /* Smarty version Smarty-3.0.7, created on 2012-11-08 20:41:37
         compiled from "C:\xampp\htdocs\grafik\grafik/modules/imagepreview/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20839509c1901d1aef7-38394310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7a96ae486989f471a627c32ad5ee7a39da5924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grafik\\grafik/modules/imagepreview/header.tpl',
      1 => 1350621623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20839509c1901d1aef7-38394310',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
        <?php if ($_smarty_tpl->getVariable('tooltip')->value=="true"){?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('modules_dir')->value;?>
imagepreview/css/imagepreview.css"/>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('modules_dir')->value;?>
imagepreview/js/jquery.jatt.js"></script>
        <script type="text/javascript">
		
 		$(document).ready(function(){
			var addRel = function(selector) {
    			$(selector).each(function() {
					var name = $(this).find("img").attr('src').replace("<?php echo $_smarty_tpl->getVariable('imagetype')->value;?>
","large");
					$(this).addClass("screenshot <?php if ($_smarty_tpl->getVariable('sticky')->value=="true"){?>sticky<?php }?>");
        			$(this).attr("rel", function() { 
    					return "" + name; 
					}); 
    			});
			};
			addRel("<?php echo $_smarty_tpl->getVariable('addrel')->value;?>
");
			$.jatt({
			direction: '<?php echo $_smarty_tpl->getVariable('direction')->value;?>
',
			followMouse: <?php echo $_smarty_tpl->getVariable('mouse')->value;?>
,
			zIndex: <?php echo $_smarty_tpl->getVariable('zindex')->value;?>
,
			speed: <?php echo $_smarty_tpl->getVariable('speed')->value;?>

			
			});
  		});
		</script>
        <style type="text/css">
		#preview {background-color:<?php echo $_smarty_tpl->getVariable('bgcolor')->value;?>
;color:<?php echo $_smarty_tpl->getVariable('titlecolor')->value;?>
}
		<?php if ($_smarty_tpl->getVariable('sticky')->value=="true"){?>
		#preview .close {display:block}
		<?php }?>
		</style>
        <?php }?>