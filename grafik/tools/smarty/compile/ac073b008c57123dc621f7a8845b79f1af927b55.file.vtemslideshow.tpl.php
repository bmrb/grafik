<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 19:38:56
         compiled from "C:\wamp\www\grafik/modules/vtemslideshow/vtemslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54094f8c6740d0ce05-41858359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac073b008c57123dc621f7a8845b79f1af927b55' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/modules/vtemslideshow/vtemslideshow.tpl',
      1 => 1333686537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54094f8c6740d0ce05-41858359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\wamp\www\grafik\tools\smarty\plugins\modifier.escape.php';
?><!-- MODULE 1a1 slideshow -->
<?php if (isset($_smarty_tpl->getVariable('images',null,true,false)->value)&&$_smarty_tpl->getVariable('images')->value){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/js/jquery.cycle.js"></script>
	<link href="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
   		$(document).ready(function(){
        $('#vtemslideshow1').cycle({
		      fx: '<?php echo $_smarty_tpl->getVariable('fx')->value;?>
',
			  timeout: <?php echo $_smarty_tpl->getVariable('timeout')->value;?>
,
              speed: <?php echo $_smarty_tpl->getVariable('speed')->value;?>
, 
              next: '#cycle_next',
              prev: '#cycle_prev',
              pager: '#vtemnav',
              pagerEvent:   'click',
              pagerAnchorBuilder: pagerFactory,
			  startingSlide: <?php echo $_smarty_tpl->getVariable('startingSlide')->value;?>
,
			  fit: <?php echo $_smarty_tpl->getVariable('fit')->value;?>
,
			  height:<?php echo $_smarty_tpl->getVariable('height')->value;?>
,
			  width: <?php echo $_smarty_tpl->getVariable('width')->value;?>

		});
		function pagerFactory(idx, slide){
           return '#vtemnav a:eq(' + idx + ') span';
        };
        });
     </script>
    <div id="vtemslideshow_wapper" style="width:<?php echo $_smarty_tpl->getVariable('width')->value;?>
px; height:<?php echo $_smarty_tpl->getVariable('height')->value;?>
px;">
    <div id="vtemslideshow1" class="vtem_main_slideshow">
	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('images')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']){?>
		    <?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value>0){?>style="display:none"<?php }?>>
		    <?php }?>
			<img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/slides/<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']){?></a><?php }?>
		<?php }?>
	<?php }} ?>
	</div>

	</div>
					
<?php }?><br /><br />

<table border="0" width="980px">
  <tr>
    <td scope="col"><b style="color:#36599C; font-size:17px; font-weight:normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select your subscription plan</b><br /><br />
    <a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
category.php?id_category=26"><img style="text-align:left" src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/images/a1.jpg" alt="<?php echo $_smarty_tpl->getVariable('image')->value['name'];?>
" ></a>
    </td>
    <td rowspan="2" scope="col">

		<div style="border: 0; text-align:left;">
			<form action="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
authentication.php" method="post">
				<div style="text-align: left;">
					<div style="color:#36599C; font-size:12px">E-Mail Adress:</div>
					<div style=" width:249px; height:37px; background: url('http://www.grafikstock.com/grafik/img/theme/aback.jpg') no-repeat;"><input type="text" style="width:240px; height:29px; margin-left:3px; margin-top:3px; border-color:#36589B" name="email" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email'],'htmlall'));?>
<?php }?>"/></div><br />
					<div style="color:#36599C; font-size:12px; padding-bottom:2px;">Password:</div>
					<div style=" width:249px; height:37px; background: url('http://www.grafikstock.com/grafik/img/theme/aback.jpg') no-repeat;"><input type="password" style="width:240px; height:29px; margin-left:3px; margin-top:3px; border-color:#36589B" name="passwd" value="<?php if (isset($_POST['passwd'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['passwd'],'htmlall'));?>
<?php }?>"/></div><br />
					<input type="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('back')->value,'htmlall','UTF-8');?>
" />

                
<div style="text-align:left; margin-left:-10px;"><input type="submit" id="" name="SubmitLogin" value="Log in" style="background-color:transparent; background-image:url(<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/images/agiris.jpg); align:left; width:85px; height:33px; font-size:14px; color:#36599C; font-weight:normal; cursor:pointer; border:0px;"  /><p style=" text-indent:100px; margin-top:-30px; font-weight:normal;  color:#303235">
<a style="color:#303235; text-decoration:none" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
authentication.php">Create an account</a></p>
<p style="text-indent:100px; font-weight:normal; color:#303235"><a style="color:#303235; text-decoration:none" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
authentication.php">Forgot Your Password?</a></p>
</div></div>				
			</form>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
category.php?id_category=26"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/images/abuy.png" /></a></div>
		</div>
    </td>
  </tr>
  <tr>
    <td><a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
category.php?id_category=26"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/vtemslideshow/images/a2.jpg" alt="<?php echo $_smarty_tpl->getVariable('image')->value['name'];?>
" ></a></td>
  </tr>
</table>
<!-- /MODULE 1a1 slideshow -->
