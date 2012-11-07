<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 10:27:35
         compiled from "C:\wamp\www\grafik/themes/prestashop/./pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213094f8be607c2eb79-87016012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2be498d691277fe830ac63c5be5d064829855f' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/themes/prestashop/./pagination.tpl',
      1 => 1333521231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213094f8be607c2eb79-87016012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\wamp\www\grafik\tools\smarty\plugins\modifier.escape.php';
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