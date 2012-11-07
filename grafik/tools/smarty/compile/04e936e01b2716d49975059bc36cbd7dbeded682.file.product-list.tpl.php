<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 10:27:36
         compiled from "C:\wamp\www\grafik/themes/prestashop/./product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277794f8be6083c3100-22461822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e936e01b2716d49975059bc36cbd7dbeded682' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/themes/prestashop/./product-list.tpl',
      1 => 1334455138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277794f8be6083c3100-22461822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include 'C:\wamp\www\grafik\tools\smarty\plugins\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\wamp\www\grafik\tools\smarty\plugins\modifier.escape.php';
?><?php if ($_GET['id_category']=="26"){?>
                <div>
<br /><div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px;">Credits<br /><br /></div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
Credits are the currency used to determine the price value of the artwork. You need to purchase credits to download all artwork. 
To purchase credits, you must have an account at GrafikStock. Credits cost less when you buy them in larger amounts. 
</div><br /><br /><br /><br />
<div>
<div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px; float:left;">Standard Account</div>
<div style="float:left; padding-left:485px; position:absolute; z-index:-555">
<img src="/grafik/themes/prestashop/img/creciz.jpg" />
</div>
<div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:520px; ">Extended Account</div>
</div>
<br />
<div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px; float:left">
Choose one of the four credit packages from the standard<br />
account starting from as low as $ 0.70. Ideal to start off or <br />
for your smaller projects.
</div>

<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:520px;">
Buy your credits in bulk from the extended account <br />
and save more.The best option for your on-going projects<br />
and daily or regular use.
</div>
</div>
<br /><br /><br /><br /><br />

<div style="padding-left:38px; float:left"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('cart.php');?>
?qty=1&amp;id_product=35&amp;token=<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
&amp;add">
<img src="/grafik/themes/prestashop/img/kredi1.jpg" /></a>
</div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi2.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi3.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi4.jpg" /></div>
<div style="padding-left:67px; float:left"><img src="/grafik/themes/prestashop/img/kredi5.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi6.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi7.jpg" /></div>
<div style="padding-left:38px; float:left"><img src="/grafik/themes/prestashop/img/kredi8.jpg" /></div>
<div style="padding-top:250px;">
<img src="/grafik/themes/prestashop/img/creciz2.jpg" />
</div><br /><br />
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
The minimum credit purchase is 10 credits. Credits are valid for 1 year starting from the date of your purchase. 
There are no limitations on daily downloads.
</div>
<br /><div style="font-size:16px; color:#36599C; font-weight:normal; padding-left:38px;">Payment methods available:<br /><br /></div>
<div style="font-size:14px; color:#303236; font-weight:normal; padding-left:38px;">
Paypal (Visa, MasterCard,Visa Electron,Diners Club)
</div>
</div>


<?php }?>  
<?php if ($_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']!="26"||$_smarty_tpl->getVariable('page_name')->value=="search"||$_smarty_tpl->getVariable('page_name')->value=="new-products"||$_smarty_tpl->getVariable('page_name')->value=="best-sales"){?> 
    <div style="float:left">
    <br />
<div id="featured-products_block_center" class="block products_block">
	<?php if (isset($_smarty_tpl->getVariable('products',null,true,false)->value)&&$_smarty_tpl->getVariable('products')->value){?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(114, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(7, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->getVariable('products')->value), null, null);?>
			<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->getVariable('nbLi')->value,'nbItemsPerLine'=>$_smarty_tpl->getVariable('nbItemsPerLine')->value,'assign'=>'nbLines'),$_smarty_tpl);?>

			<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->getVariable('nbLines')->value),'liHeight'=>$_smarty_tpl->getVariable('liHeight')->value,'assign'=>'ulHeight'),$_smarty_tpl);?>

			<ul style="height:<?php echo $_smarty_tpl->getVariable('ulHeight')->value;?>
px;">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==1){?>clear<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']-($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['total']%$_smarty_tpl->getVariable('nbItemsPerLine')->value))){?>last_line<?php }?>">

					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home');?>
" height="110px" width="110px" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" /></a>

                   
				</li>
                 
			<?php }} ?>
			</ul>
		</div>
        
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>
<div style="color:#989898; float:right; margin-right:4px; margin-top:20px;">Click here to view all details of your account<br />
<center><a href="my-account.php"><img style="margin-top:4px;" src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
myac.jpg" /></a></center>
</div>
</div>
<?php }?>