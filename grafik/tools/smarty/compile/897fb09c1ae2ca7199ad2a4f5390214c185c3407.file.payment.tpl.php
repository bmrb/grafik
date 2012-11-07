<?php /* Smarty version Smarty-3.0.7, created on 2012-08-29 22:26:38
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236150570503e890e50a1d2-22017093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '897fb09c1ae2ca7199ad2a4f5390214c185c3407' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/bankwire/payment.tpl',
      1 => 1335303037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236150570503e890e50a1d2-22017093',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p>