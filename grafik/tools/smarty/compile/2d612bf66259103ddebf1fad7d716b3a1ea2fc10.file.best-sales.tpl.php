<?php /* Smarty version Smarty-3.0.7, created on 2012-04-15 04:46:30
         compiled from "C:\wamp\www\grafik/themes/prestashop/best-sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198594f8a449686bda5-25701551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d612bf66259103ddebf1fad7d716b3a1ea2fc10' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/themes/prestashop/best-sales.tpl',
      1 => 1332290082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198594f8a449686bda5-25701551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>



<?php if ($_smarty_tpl->getVariable('products')->value){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./product-list.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('products',$_smarty_tpl->getVariable('products')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./pagination.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No top sellers.'),$_smarty_tpl);?>
</p>
<?php }?>
