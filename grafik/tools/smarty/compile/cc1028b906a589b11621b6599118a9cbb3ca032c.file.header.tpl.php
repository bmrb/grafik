<?php /* Smarty version Smarty-3.0.7, created on 2012-10-18 11:39:01
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/imagepreview/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869628952507fdc45bd0fd5-75878568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1028b906a589b11621b6599118a9cbb3ca032c' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/imagepreview/header.tpl',
      1 => 1344698249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1869628952507fdc45bd0fd5-75878568',
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