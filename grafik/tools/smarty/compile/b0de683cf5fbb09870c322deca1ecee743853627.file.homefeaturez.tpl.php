<?php /* Smarty version Smarty-3.0.7, created on 2012-08-11 13:46:39
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/homefeaturez/homefeaturez.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12463279505026542fa2f9f8-46944108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0de683cf5fbb09870c322deca1ecee743853627' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/homefeaturez/homefeaturez.tpl',
      1 => 1344688956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12463279505026542fa2f9f8-46944108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?><!-- MODULE Home Featured Products -->
<div id="featured-products_block_center" class="block products_block">
	<h4><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeaturez'),$_smarty_tpl);?>
</h4>
	<?php if (isset($_smarty_tpl->getVariable('products',null,true,false)->value)&&$_smarty_tpl->getVariable('products')->value){?>
		<div class="block_content">
			<?php $_smarty_tpl->tpl_vars['liHeight'] = new Smarty_variable(342, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->getVariable('products')->value), null, null);?>
			<?php $_smarty_tpl->tpl_vars['nbLines'] = new Smarty_variable($_smarty_tpl->getVariable('nbLi')->value/ceil($_smarty_tpl->getVariable('nbItemsPerLine')->value), null, null);?>
			<?php $_smarty_tpl->tpl_vars['ulHeight'] = new Smarty_variable($_smarty_tpl->getVariable('nbLines')->value*$_smarty_tpl->getVariable('liHeight')->value, null, null);?>
			<ul style="height:<?php echo $_smarty_tpl->getVariable('ulHeight')->value;?>
px;">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homefeaturezProducts']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homefeaturezProducts']['iteration']=0;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homefeaturezProducts']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homefeaturezProducts']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homefeaturezProducts']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==0){?>last_item_of_line<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['iteration']%$_smarty_tpl->getVariable('nbItemsPerLine')->value==1){?>clear<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['total']-($_smarty_tpl->getVariable('smarty')->value['foreach']['homefeaturezProducts']['total']%$_smarty_tpl->getVariable('nbItemsPerLine')->value))){?>last_line<?php }?>">
					<h5><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],32,'...'),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],27,'...'),'htmlall','UTF-8');?>
</a></h5>
					<p class="product_desc"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'homefeaturez'),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),130,'...');?>
</a></p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home');?>
" height="<?php echo $_smarty_tpl->getVariable('homeSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('homeSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8');?>
" /></a>
					<div>
						<p class="price_container"><span class="price"><?php if (!$_smarty_tpl->getVariable('priceDisplay')->value){?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p>
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeaturez'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeaturez'),$_smarty_tpl);?>
</a>
						<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2){?>
						<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
cart.php?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->getVariable('static_token')->value;?>
&amp;add" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeaturez'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeaturez'),$_smarty_tpl);?>
</a>
						<?php }else{ ?>
						<span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'homefeaturez'),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
				</li>
			<?php }} ?>
			</ul>
		</div>
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeaturez'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>

<!-- /MODULE Home Featured Products -->
