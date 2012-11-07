<?php
class RandomProductsControllerCore extends FrontController
{
	public $php_self = 'random-products.php';

	public function setMedia()
	{
		parent::setMedia();
		Tools::addCSS(_THEME_CSS_DIR_.'product_list.css');
	}
	
	public function process()
	{
		global $smarty;
		
		$cat = intval(Configuration::get('HOME_FEATURED_CATALOG'));
		$category = new Category($cat ? $cat : 1);
		$nb = 42;
		if (intval(Configuration::get('HOME_FEATURED_RANDOM'))) {
			$products = $category->getProducts(intval($params['cookie']->id_lang), 1, ($nb ? $nb : 10), NULL, NULL, false, true, true, ($nb ? $nb : 10));
		}
		else {
			$products = $category->getProducts(intval($params['cookie']->id_lang), 1, ($nb ? $nb : 10), 'date_add', 'DESC');
		}
		
		$smarty->assign(array('products' => $products, 'homeSize' => Image::getSize('home')));	
		
	}
	
	//

	//
	
	public function displayContent()
	{
		parent::displayContent();
		self::$smarty->display(_PS_THEME_DIR_.'random-products.tpl');
	}
}

