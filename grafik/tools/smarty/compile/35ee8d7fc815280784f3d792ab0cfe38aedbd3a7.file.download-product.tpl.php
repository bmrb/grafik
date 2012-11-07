<?php /* Smarty version Smarty-3.0.7, created on 2012-09-19 22:31:54
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/mails/en/download-product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795094733505a39cab427c0-19933852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35ee8d7fc815280784f3d792ab0cfe38aedbd3a7' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/mails/en/download-product.tpl',
      1 => 1335302954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795094733505a39cab427c0-19933852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('virtualProducts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['deadline'])){?>
			expires on <?php echo $_smarty_tpl->tpl_vars['product']->value['deadline'];?>

		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['downloadable'])){?>
			downloadable <?php echo $_smarty_tpl->tpl_vars['product']->value['downloadable'];?>
 time(s)
		<?php }?>
	</li>
<?php }} ?>
</ul>