<?php /* Smarty version Smarty-3.0.7, created on 2012-10-14 01:57:07
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201013141507a0de35b6692-78774192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5aef6baa3c890190c5a2927cf5e33045b9c8bb9' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/themes/prestashop/identity.tpl',
      1 => 1344460952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201013141507a0de35b6692-78774192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/graf546/domains/grafikstock.com/public_html/grafik/tools/smarty/plugins/modifier.escape.php';
?><?php ob_start(); ?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->getVariable('navigationPipe')->value;?>
</span><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</h1>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('confirmation',null,true,false)->value)&&$_smarty_tpl->getVariable('confirmation')->value){?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl);?>

		<?php if (isset($_smarty_tpl->getVariable('pwd_changed',null,true,false)->value)){?><br /><?php echo smartyTranslate(array('s'=>'Your password has been sent to your e-mail:'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('email')->value,'htmlall','UTF-8');?>
<?php }?>
	</p>
<?php }else{ ?>
	<h3><?php echo smartyTranslate(array('s'=>'Please do not hesitate to update your personal information if it has changed.'),$_smarty_tpl);?>
</h3>
	<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
	<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('identity.php',true);?>
" method="post" class="std">
		<fieldset>

			<p class="text">
				<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" /> <sup>*</sup>
			</p>
			<p class="text">
				<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" /> <sup>*</sup>
			</p>
			<p class="text">
				<label for="email"><?php echo smartyTranslate(array('s'=>'E-mail'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" /> <sup>*</sup>
			</p>
			<p class="text">
				<label for="old_passwd"><?php echo smartyTranslate(array('s'=>'Current Password'),$_smarty_tpl);?>
</label>
				<input type="password" class="text" name="old_passwd" id="old_passwd" /> <sup>*</sup>
			</p>
			<p class="password">
				<label for="passwd"><?php echo smartyTranslate(array('s'=>'New Password'),$_smarty_tpl);?>
</label>
				<input type="password" class="text" name="passwd" id="passwd" />
			</p>
			<p class="password">
				<label for="confirmation"><?php echo smartyTranslate(array('s'=>'Confirmation'),$_smarty_tpl);?>
</label>
				<input type="password" class="text" name="confirmation" id="confirmation" />
			</p>
			<p class="select">
				<label><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</label>
				<select name="days" id="days">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8');?>
" <?php if (($_smarty_tpl->getVariable('sl_day')->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8');?>
&nbsp;&nbsp;</option>
					<?php }} ?>
				</select>
				<select id="months" name="months">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('months')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value,'htmlall','UTF-8');?>
" <?php if (($_smarty_tpl->getVariable('sl_month')->value==$_smarty_tpl->tpl_vars['k']->value)){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>($_smarty_tpl->tpl_vars['v']->value)),$_smarty_tpl);?>
&nbsp;</option>
					<?php }} ?>
				</select>
				<select id="years" name="years">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('years')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8');?>
" <?php if (($_smarty_tpl->getVariable('sl_year')->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8');?>
&nbsp;&nbsp;</option>
					<?php }} ?>
				</select>
			</p>
			<?php if ($_smarty_tpl->getVariable('newsletter')->value){?>
			<p class="checkbox">
				<input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1){?> checked="checked"<?php }?> />
				<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Sign up for our newsletter'),$_smarty_tpl);?>
</label>
			</p>
			<p class="checkbox">
				<input type="checkbox" name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']==1){?> checked="checked"<?php }?> />
				<label for="optin"><?php echo smartyTranslate(array('s'=>'Receive special offers from our partners'),$_smarty_tpl);?>
</label>
			</p>
			<?php }?>
			<p class="submit">
				<input type="submit" class="button" name="submitIdentity" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" />
			</p>
		</fieldset>
	</form>
	<p id="security_informations">
		<?php echo smartyTranslate(array('s'=>'[Insert customer data privacy clause or law here, if applicable]'),$_smarty_tpl);?>

	</p>
<?php }?>

<ul class="footer_links">
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/account.jpg" alt="" class="icon" /></a>
</ul>
