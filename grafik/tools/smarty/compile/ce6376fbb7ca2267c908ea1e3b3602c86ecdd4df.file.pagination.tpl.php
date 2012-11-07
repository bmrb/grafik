<?php /* Smarty version Smarty-3.0.7, created on 2012-10-16 17:39:22
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/./pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1230938463507d8dbaef9c60-84733961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6376fbb7ca2267c908ea1e3b3602c86ecdd4df' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/./pagination.tpl',
      1 => 1335412356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1230938463507d8dbaef9c60-84733961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('page_name')->value=="category"&&$_GET['id_category']!="26"||$_smarty_tpl->getVariable('page_name')->value=="search"||$_smarty_tpl->getVariable('page_name')->value=="new-products"||$_smarty_tpl->getVariable('page_name')->value=="best-sales"){?> 
	<?php if (isset($_GET['id_category'])&&$_GET['id_category']&&isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('category',$_smarty_tpl->getVariable('category')->value,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('category',$_smarty_tpl->getVariable('category')->value,true,false,false,true), null, null);?>
	<?php }elseif(isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']&&isset($_smarty_tpl->getVariable('manufacturer',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('manufacturer',$_smarty_tpl->getVariable('manufacturer')->value,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('manufacturer',$_smarty_tpl->getVariable('manufacturer')->value,true,false,false,true), null, null);?>
	<?php }elseif(isset($_GET['id_supplier'])&&$_GET['id_supplier']&&isset($_smarty_tpl->getVariable('supplier',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('supplier',$_smarty_tpl->getVariable('supplier')->value,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink('supplier',$_smarty_tpl->getVariable('supplier')->value,true,false,false,true), null, null);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink(false,false,false,false,true,false), null, null);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->getVariable('link')->value->getPaginationLink(false,false,true,false,false,true), null, null);?>
	<?php }?>
<ul class="pagination">
<li class="current" style="font-size:13px; color:#303236;"><span>Page: <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('p')->value,'htmlall','UTF-8');?>
&nbsp; of &nbsp;<?php echo intval($_smarty_tpl->getVariable('pages_nb')->value);?>
</span></li>
		<?php if ($_smarty_tpl->getVariable('p')->value!=1){?>
			<?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->getVariable('p')->value-1, null, null);?>
			<li id="pagination_previous"><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
 href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('p_previous')->value);?>
">&nbsp;</a></li>
		<?php }else{ ?>
			<li id="pagination_previous" class="disabled"><span>&nbsp;</span></li>
		<?php }?>
        
		<?php if ($_smarty_tpl->getVariable('pages_nb')->value>1&&$_smarty_tpl->getVariable('p')->value!=$_smarty_tpl->getVariable('pages_nb')->value){?>
			<?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->getVariable('p')->value+1, null, null);?>
			<li id="pagination_next"><a <?php echo $_smarty_tpl->getVariable('no_follow_text')->value;?>
 href="<?php echo $_smarty_tpl->getVariable('link')->value->goPage($_smarty_tpl->getVariable('requestPage')->value,$_smarty_tpl->getVariable('p_next')->value);?>
">&nbsp;</a></li>
		<?php }else{ ?>
			<li id="pagination_next" class="disabled"><span>&nbsp;</span></li>
		<?php }?>
</ul>
<?php }?>