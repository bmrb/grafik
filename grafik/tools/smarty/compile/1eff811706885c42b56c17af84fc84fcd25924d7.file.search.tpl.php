<?php /* Smarty version Smarty-3.0.7, created on 2012-10-11 18:40:46
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2079803045077049e52d7a3-63343022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eff811706885c42b56c17af84fc84fcd25924d7' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/search.tpl',
      1 => 1335918923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079803045077049e52d7a3-63343022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?>




<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php if (!$_smarty_tpl->getVariable('nbProducts')->value){?>
	<p class="warning">
		<?php if (isset($_smarty_tpl->getVariable('search_query',null,true,false)->value)&&$_smarty_tpl->getVariable('search_query')->value){?>
			<?php echo smartyTranslate(array('s'=>'No results found for your search'),$_smarty_tpl);?>
&nbsp;"<?php if (isset($_smarty_tpl->getVariable('search_query',null,true,false)->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('search_query')->value,'htmlall','UTF-8');?>
<?php }?>"
		<?php }elseif(isset($_smarty_tpl->getVariable('search_tag',null,true,false)->value)&&$_smarty_tpl->getVariable('search_tag')->value){?>
			<?php echo smartyTranslate(array('s'=>'No results found for your search'),$_smarty_tpl);?>
&nbsp;"<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('search_tag')->value,'htmlall','UTF-8');?>
"
		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Please type a search keyword'),$_smarty_tpl);?>

		<?php }?>
	</p>
<?php }else{ ?>
	<?php if (!isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)||(isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)&&!$_smarty_tpl->getVariable('instantSearch')->value)){?><?php }?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-list.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('products',$_smarty_tpl->getVariable('search_products')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<?php if (!isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)||(isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)&&!$_smarty_tpl->getVariable('instantSearch')->value)){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./pagination.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
<?php }?>
