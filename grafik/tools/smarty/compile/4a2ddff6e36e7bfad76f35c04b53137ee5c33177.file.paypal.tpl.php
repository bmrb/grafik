<?php /* Smarty version Smarty-3.0.7, created on 2012-10-01 21:52:26
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/paypal/standard/paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901582843506a028ac44799-08224175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2ddff6e36e7bfad76f35c04b53137ee5c33177' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/paypal/standard/paypal.tpl',
      1 => 1335303851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901582843506a028ac44799-08224175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
modules/paypal/standard/redirect.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
modules/paypal/paypal.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>

	</a>
</p>
