<?php /* Smarty version Smarty-3.0.7, created on 2012-10-16 17:39:03
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1305596986507d8da703cbd4-43524732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947c8986d3906f0acae4209e5f0d6dc1adf5beb1' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/my-account.tpl',
      1 => 1346217827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1305596986507d8da703cbd4-43524732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?><?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>
<br />
<br />
<center>
<table width="640" border="0">
  <tr><br /><br /><br /><br /><br />
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('discount.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
vouchers.jpg" alt="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
" /></a><br />&nbsp;
    </td>
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Personal Information'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
personal.jpg" alt="<?php echo smartyTranslate(array('s'=>'Personal Information'),$_smarty_tpl);?>
" /></a><br />&nbsp;
    </td>
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Adreses'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
adress.jpg" alt="<?php echo smartyTranslate(array('s'=>'Adreses'),$_smarty_tpl);?>
" /></a><br />&nbsp;
    </td><br /><br />
  </tr>
  <tr>
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-slip.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credits Slip'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
credit.jpg" alt="<?php echo smartyTranslate(array('s'=>'Credits Slip'),$_smarty_tpl);?>
" /></a>
    </td>
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Order History'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
orderh.jpg" alt="<?php echo smartyTranslate(array('s'=>'Order History'),$_smarty_tpl);?>
" /></a>
    </td>
    <td>
    <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Downoad History'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
downloadh.jpg" alt="<?php echo smartyTranslate(array('s'=>'Downoad History'),$_smarty_tpl);?>
" /></a>
    </td>
  </tr>
</table>
</center>
<?php echo $_smarty_tpl->getVariable('HOOK_CUSTOMER_ACCOUNT')->value;?>

<br /><br /><br /><br /><br /><br />
<p><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aciz.jpg" /></p><br /><br /><br /><br />
    <div style="float:left">
<div id="featured-products_block_center" class="block products_block" style="margin-left:40px; width:950px;">

    <p style="color:#989898; font-weight:normal; font-size:16px">NEW ARTWORKS</p>
	<?php if (isset($_smarty_tpl->getVariable('products',null,true,false)->value)&&$_smarty_tpl->getVariable('products')->value){?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(110, null, null);?>
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
" class="product_imagex"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home');?>
" height="110px" width="110px" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" /></a>
					<div>


					</div>
				</li>
			<?php }} ?>
			</ul>
		</div><br />
        <a style="color:#989898; font-weight:normal; font-size:14px; text-decoration:none; float:right; margin-right:75px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
new-products">View all</a>
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>
</div>
<div>&nbsp;</div><br />
<div>&nbsp;</div><br />
<div>&nbsp;</div><br />
<p><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aciz.jpg" /></p>
<table width="980" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td scope="col" width="350px;">
    <div style="width:330px; margin-top:0px;">
    <div style="float:left; color:#989898; margin-left:5px; font-size:15px;">Artwork types</div><div style="float:left; margin-left:32px; color:#989898; font-size:15px;">Categories</div><br /><br />
        <div style="float:left; margin-right:10px;"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aciz2.jpg" /></div>
    <div style="float:left; color:#36599C">
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
search.php?tag=graphic library">graphic library</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
44-labels-tags">labels & tags</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
45-all-over-print">all over print</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
46-shapes">shapes</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
47-technical-card">technical cards</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
48-washing-symbol">washing symbol</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
49-graphics-for-manufacturig">graphics for<br /> manufacturing</a><br />
 </div>
    <div style="float:left; margin-left:10px;"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aciz2.jpg" /></div>

    <div style="float:left; margin-left:10px; color:#36599C">
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
38-womenswear">womenswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
39-menswear">menswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
40-kidswear">kidswear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
41-streetwear">streetwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
42-beachwear">beachwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
43-casualwear">casualwear</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
4-vintage">vintage</a><br />
<a style="color:#36599C; text-decoration:none; font-size:15px" href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
5-music">music</a><br />


    </div>
    <div style="float:left; margin-left:10px;"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aciz2.jpg" /></div>
    
    </div>
    </td>
    <td scope="col" width="326px;">
    <div style="float:left; width:265px; height:110px; background: url(<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aneed.jpg) no-repeat;">
    <div style=" margin-left:15px; margin-top:22px"><a href="/grafik/contact-form.php"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/homefeatured/aneedc.jpg" /></a></div>
    </div>
    
    </td>
  </tr>
</table>

<!-- /MODULE Home Featured Products -->
