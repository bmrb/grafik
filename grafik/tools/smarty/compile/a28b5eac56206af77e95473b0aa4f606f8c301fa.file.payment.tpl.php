<?php /* Smarty version Smarty-3.0.7, created on 2012-08-29 22:26:38
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162019251503e890e469174-85362667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a28b5eac56206af77e95473b0aa4f606f8c301fa' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/cheque/payment.tpl',
      1 => 1335303164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162019251503e890e469174-85362667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by cheque (order process will be longer)','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>