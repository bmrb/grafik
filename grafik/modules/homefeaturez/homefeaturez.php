<?php

class HomeFeaturez extends Module
{
	private $_html = '';
	private $_postErrors = array();

	function __construct()
	{
		$this->name = 'homefeaturez';
		$this->tab = 'Tools';
		$this->version = '1.0.1';

		parent::__construct();
		
		$this->displayName = $this->l('Featured Products on the homepage (zapalm version)');
		$this->description = $this->l('Displays Featured Products in the middle of your homepage. In this version you will found two new options: you can turn on/off the showing random products and select the category, witch products will show on the homepage.');
	}

	function install()
	{
		if (!Configuration::updateValue('HOME_FEATURED_NBRX', 10) OR !Configuration::updateValue('HOME_FEATURED_CATALOGX', 1) OR !Configuration::updateValue('HOME_FEATURED_RANDOMX', 1) OR !parent::install())
			return false;
		return true;
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitHomeFeatured'))
		{
			$nbr = intval(Tools::getValue('nbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of products');
			else {
				Configuration::updateValue('HOME_FEATURED_NBRX', intval($nbr));
				Configuration::updateValue('HOME_FEATURED_CATALOGX', intval(Tools::getValue('HOME_FEATURED_CATALOGX')));
				Configuration::updateValue('HOME_FEATURED_RANDOMX', intval(Tools::getValue('HOME_FEATURED_RANDOMX')));
			}
			if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		global $cookie;
		
		$output = '
		
			<fieldset style="width: 400px">
				<legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
					<label>'.$this->l('Number of product displayed').'</label>
					<div class="margin-form">
						<input type="text" size="5" name="nbr" value="'.Tools::getValue('nbr', intval(Configuration::get('HOME_FEATURED_NBRX'))).'" />
						<p class="clear">'.$this->l('The number of products displayed on homepage (default: 10)').'</p>					
					</div>
					<label>'.$this->l('ID category').'</label>
					<div class="margin-form">
						<input type="text" name="HOME_FEATURED_CATALOG"  value="'.Configuration::get('HOME_FEATURED_CATALOGX').'"/>
						<p class="clear">'.$this->l('Enter the ID category of products, witch will show on the homepage (default : 1 - Home category)').'</p>
					</div>				
					<label>'.$this->l('Show products randomly').'</label>
					<div class="margin-form">
						<input type="checkbox" name="HOME_FEATURED_RANDOM"  value="1" '.(Configuration::get('HOME_FEATURED_RANDOMX') ? 'checked="checked"' : '').' />
						<p class="clear">'.$this->l('Check it, if you whant to show products randomly').'</p>
					</div>								
					<center><input type="submit" name="submitHomeFeatured" value="'.$this->l('Save').'" class="button" /></center>
				</form>
			</fieldset>
			<br class="clear">
		';
			
		$iso_code = Db::getInstance()->ExecuteS('SELECT `iso_code` FROM `'._DB_PREFIX_.'lang` WHERE `active`=1 AND `id_lang`='.$cookie->id_lang);
		$output.= '
				<fieldset style="width: 400px;">
					<legend><img src="../img/admin/manufacturers.gif" /> '.$this->l('Module info').'</legend>
					<div id="dev_div">
						<span><b>'.$this->l('Version').':</b> '.$this->version.'</span><br>
						<span><b>'.$this->l('License').':</b> <a class="link" href="'.__PS_BASE_URI__.'modules/'.$this->name.'/'.'license.html'.'" target="_blank">'.$this->l('free and open').'</a></span><br>
						<span><b>'.$this->l('Forums').':</b> <a class="link" href="http://www.prestashop.com/forums/viewthread/66896/" target="_blank">'.$this->l('english').'</a>, <a class="link" href="http://prestadev.ru/forum/tema-1509.html" target="_blank">'.$this->l('russian').'</a></span><br>
						<span><b>'.$this->l('Website').':</b> <a class="link" href="http://modulez.ru'.($iso_code[0]['iso_code'] == 'ru' ? '' : '/en/').' " target="_blank">modulez.ru'.($iso_code[0]['iso_code'] == 'ru' ? '' : '/en/').'</a><br>
						<span><b>'.$this->l('Contact').':</b> <a class="link" href="http://modulez.ru'.($iso_code[0]['iso_code'] == 'ru' ? '/feedback.php' : '/en/feedback.php').' " target="_blank">modulez.ru'.($iso_code[0]['iso_code'] == 'ru' ? '/feedback.php' : '/en/feedback.php').'</a><br>
						<span style="font-style:italic">('.$this->l('please, send me a message in russian or english only').')</span></span><br>
						<br>
						<span style="font-style:italic">'.$this->l('Thank you for the using this module').'</span>&nbsp;&nbsp;<img src="../modules/orderzeditor/zapalm24x24.jpg" />
					</div>
				</fieldset>
				<br class="clear">
		';		
		
		return $output;
	}

	function hookHome($params)
	{
		global $smarty;
		
		$cat = intval(Configuration::get('HOME_FEATURED_CATALOGX'));
		$category = new Category($cat ? $cat : 1);
		$nb = intval(Configuration::get('HOME_FEATURED_NBRX'));
		if (intval(Configuration::get('HOME_FEATURED_RANDOMX'))) {
			$products = $category->getProducts(intval($params['cookie']->id_lang), 1, 42, NULL, NULL, false, true, true, ($nb ? $nb : 10));
		}
		else {
			$products = $category->getProducts(intval($params['cookie']->id_lang), 1, 42, 'date_add', 'DESC');
		}
		
		$smarty->assign(array('products' => $products, 'homeSize' => Image::getSize('home')));

		/*return $this->display(__FILE__, 'homefeaturez.tpl');*/
	}
}
