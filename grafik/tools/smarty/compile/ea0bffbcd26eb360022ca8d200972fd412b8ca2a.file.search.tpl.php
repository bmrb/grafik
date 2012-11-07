<?php /* Smarty version Smarty-3.0.7, created on 2012-04-15 04:52:34
         compiled from "C:\wamp\www\grafik/themes/prestashop/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194204f8a46022d21b0-91308003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0bffbcd26eb360022ca8d200972fd412b8ca2a' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/themes/prestashop/search.tpl',
      1 => 1334461918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194204f8a46022d21b0-91308003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\wamp\www\grafik\tools\smarty\plugins\modifier.escape.php';
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
	<?php if (!isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)||(isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)&&!$_smarty_tpl->getVariable('instantSearch')->value)){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-sort.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-list.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('products',$_smarty_tpl->getVariable('search_products')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<?php if (!isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)||(isset($_smarty_tpl->getVariable('instantSearch',null,true,false)->value)&&!$_smarty_tpl->getVariable('instantSearch')->value)){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./pagination.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
<?php }?>
