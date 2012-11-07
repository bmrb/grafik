<?php /* Smarty version Smarty-3.0.7, created on 2012-07-24 13:09:42
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/mailalerts/myalerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49514988500e9086ce0039-14876549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d59edeb352a7c393d7347010d11ff2b49b46f07' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/mailalerts/myalerts.tpl',
      1 => 1335303307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49514988500e9086ce0039-14876549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?>

<div id="myalerts">
	<?php ob_start(); ?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->getVariable('navigationPipe')->value;?>
</span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

	<h2><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</h2>

	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

	<?php if (intval($_smarty_tpl->getVariable('id_customer')->value)!=0){?>
		<?php if ($_smarty_tpl->getVariable('alerts')->value){?>
		<div id="block-history" class="block-center">
			<table class="std">
				<thead>
					<tr>
						<th class="first_item"><?php echo smartyTranslate(array('s'=>'Product','mod'=>'mailalerts'),$_smarty_tpl);?>
</th>
						<th class="last_item" style="width:20px;"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'mailalerts'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('alerts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
				<tr>
					<td class="first_item">
					<span style="float:left;"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8');?>
" /></a></span>
					<span style="float:left;"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['link'],'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40,'...'),'htmlall','UTF-8');?>
</a>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
						<br /><i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes_small'],'htmlall','UTF-8');?>
</i>
					<?php }?></span>
					</td>
					<td class="align_center">
						<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
modules/mailalerts/myalerts.php?action=delete&id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']){?>&id_product_attribute=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
<?php }?>"><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
modules/mailalerts/img/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'mailalerts'),$_smarty_tpl);?>
" /></a>
					</td>
				</tr>
				</tbody>
			<?php }} ?>
			</table>
		</div>
		<div id="block-order-detail">&nbsp;</div>
		<?php }else{ ?>
			<p class="warning"><?php echo smartyTranslate(array('s'=>'You are not subscribed to any alerts.','mod'=>'mailalerts'),$_smarty_tpl);?>
</p>
		<?php }?>
	<?php }?>

	<ul class="footer_links">
		<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/my-account.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Back to Your Account','mod'=>'mailalerts'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/home.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><?php echo smartyTranslate(array('s'=>'Home','mod'=>'mailalerts'),$_smarty_tpl);?>
</a></li>
	</ul>
</div>
