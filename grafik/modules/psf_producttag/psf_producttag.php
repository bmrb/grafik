<?php

class psf_ProductTag extends Module
{
	public $author;
	
	function __construct()
	{
 	 	$this->name = 'psf_producttag';
 	 	$this->version = 1.2;
 	 	$this->tab = 'Products';
 	 	$this->author = 'Pierre-Yves (PSF Team)';
		
		parent::__construct();
		$this->page = basename(__FILE__, '.php');
		$this->displayName = '[<font color="blue">P</font><font color="#f4c6c9">S</font><font color="red">F</font>] '.$this->l('Product Tags');
		$this->description = $this->l('Display tags on product page');
	}
	
	function install()
	{
	 	if (!parent::install()
	 		|| !$this->registerHook('productfooter')
	 		|| !$this->registerHook('header'))
	 		return false;
	 	
	 	return true;
	}
	
	function uninstall()
	{
		if (!parent::uninstall())
			return false;
			
		return true;
	}
	
	function hookproductfooter($params)
	{
		// On reprend la variable globale smarty
		global $smarty;
		
		$tags = array();
		
		// On va rechercher le produit en fonction de l'identifiant que l'on reçoit
		$product = new Product( intval($_GET['id_product']) );
		
		// On vérifie qu'il est bien chargé (qu'il existe?)
		if (!Validate::isLoadedObject($product))
			return '';
		
		// On reprend ses tags
		$temp = explode(',', $product->getTags( _USER_ID_LANG_ ));
		
		// On les complete (id, etc...)
		foreach ($temp as $value)
		{
			$tag = new Tag(null, trim($value), _USER_ID_LANG_);
			
			if (!Validate::isLoadedObject($tag))
				continue;
			
			$tags[] = $tag;
			unset($tag);
		}
		
		// On assigne sa variable dans smarty pour un output sur le TPL
		$smarty->assign('tags', $tags);
		
		// On affiche le template
		return $this->display(__FILE__, 'psf_producttag.tpl');
	}
	
	function hookheader($params)
	{
		// On reprend la variable globale css_file
		global $css_files;
		
		// On ajoute notre CSS au tableau pour qu'il soit chargé dans le header de la page
		$css_files[_MODULE_DIR_.'psf_producttag/psf_producttag.css'] = 'all';
	}
}

?>
