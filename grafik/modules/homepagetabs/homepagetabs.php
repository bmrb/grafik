<?php
class HomepageTabs extends Module
{
    private $_html = '';
    private $_postErrors = array();
	private $_tab_title_chars = "";
	private $_tab_description_type = "";
	private $_tab_description_length = "";
	private $_tab_noof_featured = "";
	private $_tab_noof_newproducts = "";
	private $_tab_noof_specialproducts = "";
	private $_tab_noof_viewedproducts = ""; 
	private $_tab_noof_topseller = "";
	private $_tab_order_featured = "";
	private $_tab_order_newproducts = "";
	private $_tab_order_specialproducts = "";
	private $_tab_order_viewedproducts = "";
	private $_tab_order_topseller = "";
	private $_tab_bg_image = "";
	private $_tab_cart_button = "";
	private $_tab_view_button = "";
	private $_tab_custom = "";
	const INSTALL_SQL_FILE = 'install.sql';
		
    function __construct()
    {
        $this->name = 'homepagetabs';       
		$this->tab = floatval(substr(_PS_VERSION_,0,3))<1.4?'Presto-Changeo':'front_office_features';
		$this->version = '1.1';
		if (floatval(substr(_PS_VERSION_,0,3)) >= 1.4)
			$this->author = 'Presto-Changeo';
        
        parent::__construct();
		
		$this->_refreshProperties();
        $this->displayName = $this->l('Homepage Tabs');
        $this->description = $this->l('Displays Featured Products, Most Viewed, Specials, New products and Best sellers on the homepage');
    }

    function install()
    {
        if (!parent::install()  OR !$this->registerHook('my-account') 
			OR !$this->registerHook('header') OR !$this->createTable()
			OR !Configuration::updateValue('TAB_TITLE_CHARS', 30)
			OR !Configuration::updateValue('TAB_DESCRIPTION_TYPE', 0)
			OR !Configuration::updateValue('TAB_DESCRIPTION_LENGTH', 30)
			OR !Configuration::updateValue('TAB_NOOF_FEATURED', 4)
			OR !Configuration::updateValue('TAB_NOOF_NEWPRODUCTS', 4)
			OR !Configuration::updateValue('TAB_NOOF_SPECIALPRODUCTS', 4)
			OR !Configuration::updateValue('TAB_NOOF_VIEWDPRODUCTS', 4)
			OR !Configuration::updateValue('TAB_NOOF_TOPSELLER', 4)
			OR !Configuration::updateValue('TAB_ORDER_NEWPRODUCTS','2')
			OR !Configuration::updateValue('TAB_ORDER_SPECIALPRODUCTS','3')
			OR !Configuration::updateValue('TAB_ORDER_VIEWDPRODUCTS','4')
			OR !Configuration::updateValue('TAB_ORDER_TOPSELLER','5')	
			OR !Configuration::updateValue('TAB_ORDER_FEATURED','1')
			OR !Configuration::updateValue('TAB_BG_IMAGE','bg_blue.gif')
			OR !Configuration::updateValue('TAB_CART_BUTTON',0)
			OR !Configuration::updateValue('TAB_VIEW_BUTTON',0)			
			OR !Configuration::updateValue('TAB_CUSTOM', serialize(array()))			
			)
			return false;
		return true;
    }
	
	public function _refreshProperties()
	{
						
		$this->_tab_title_chars = intval(Configuration::get('TAB_TITLE_CHARS'));
		$this->_tab_description_type = intval(Configuration::get('TAB_DESCRIPTION_TYPE'));
		$this->_tab_description_length = intval(Configuration::get('TAB_DESCRIPTION_LENGTH'));
		$this->_tab_noof_newproducts = intval(Configuration::get('TAB_NOOF_NEWPRODUCTS'));
		$this->_tab_noof_specialproducts = intval(Configuration::get('TAB_NOOF_SPECIALPRODUCTS'));
		$this->_tab_noof_viewedproducts = intval(Configuration::get('TAB_NOOF_VIEWDPRODUCTS'));
		$this->_tab_noof_topseller = intval(Configuration::get('TAB_NOOF_TOPSELLER'));
		$this->_tab_noof_featured = intval(Configuration::get('TAB_NOOF_FEATURED'));
		$this->_tab_order_newproducts = intval(Configuration::get('TAB_ORDER_NEWPRODUCTS'));
		$this->_tab_order_specialproducts = intval(Configuration::get('TAB_ORDER_SPECIALPRODUCTS'));
		$this->_tab_order_viewedproducts = intval(Configuration::get('TAB_ORDER_VIEWDPRODUCTS'));
		$this->_tab_order_topseller = intval(Configuration::get('TAB_ORDER_TOPSELLER'));	
		$this->_tab_order_featured = intval(Configuration::get('TAB_ORDER_FEATURED'));
		$this->_tab_bg_image = Configuration::get('TAB_BG_IMAGE');
		$this->_tab_cart_button = intval(Configuration::get('TAB_CART_BUTTON'));
		$this->_tab_view_button = intval(Configuration::get('TAB_VIEW_BUTTON'));				
		$tmp = Configuration::get('TAB_CUSTOM');
		if (strlen($tmp) > 6)
			$this->_tab_custom = unserialize($tmp);
		else
			$this->_tab_custom = array();
	}
	
	public function createTable()
	{
		if (!file_exists(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
		{
			return (false);
		}
		elseif (!$sql = file_get_contents(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
		{
			return (false);
		}
		$sql = str_replace('PREFIX_', _DB_PREFIX_, $sql);
		$sql = preg_split("/;\s*[\r\n]+/",$sql);
		foreach ($sql as $query)
		{
			if (!empty($query))
			{
				if (!Db::getInstance()->Execute(trim($query)))
					return (false);
			}
		}
		return true;
	} 

	public function updateproductview($id_product)
	{
		if(!empty($id_product))
		{
			$result = Db::getInstance()->ExecuteS("SELECT * FROM `"._DB_PREFIX_."mostviewed` WHERE `id_product` = ".$id_product);
			if (sizeof($result) == 0)
			{
				Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'mostviewed` (`id_product`,`view_count`) VALUES ('.$id_product.',0)');
			}
			else
			{
				Db::getInstance()->Execute('UPDATE `'._DB_PREFIX_.'mostviewed` SET `view_count` = `view_count` + 1 WHERE  `id_product` = '.$id_product);
			}
		}
	}
	
	public function getContent()
	{
		$this->_html = '<h2>'.$this->displayName.'</h2>';
		$this->_postProcess();
		$this->_displayForm();
		return $this->_html;
	}

    public function _displayForm()
    {
	    $this->_html = '
            <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
				<fieldset class="width3" style="width:800px"><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
					<table border="0" width="800">
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Tab Background Image').'
						</td>
						<td align="left" valign="top">
							<select name="tab_bg_image">
								<option value="bg_blue.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_blue.gif' ? 'selected' : '').'>Blue</option>
								<option value="bg_purple.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_purple.gif' ? 'selected' : '').'>Purple</option>
								<option value="bg_green.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_green.gif' ? 'selected' : '').'>Green</option>
								<option value="bg_yellow.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_yellow.gif' ? 'selected' : '').'>Yellow</option>
								<option value="bg_orange.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_orange.gif' ? 'selected' : '').'>Orange</option>
								<option value="bg_red.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_red.gif' ? 'selected' : '').'>Red</option>
								<option value="bg_pink.gif" '.(Tools::getValue('tab_bg_image', $this->_tab_bg_image) == 'bg_pink.gif' ? 'selected' : '').'>Pink</option>
							</select>
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Product Title Length').'
						</td>
						<td align="left" valign="top">
							<input style="width:40px" type="text" name="tab_title_chars" value="'.Tools::getValue('tab_title_chars', $this->_tab_title_chars).'" />
							'.$this->l('Define the Length of the product title displayed in this block').'
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Show View Button').'
						</td>
						<td align="left" valign="top">
							<input type="radio" name="tab_view_button" value="1" '.(Tools::getValue('tab_view_button', $this->_tab_view_button) == 1 ? 'checked="checked"' : '').' /> '.$this->l('Yes').'
							<input type="radio" name="tab_view_button" value="0" '.(Tools::getValue('tab_view_button', $this->_tab_view_button) == 0 ? 'checked="checked"' : '').' /> '.$this->l('No').'
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Show Cart Button').'
						</td>
						<td align="left" valign="top">
							<input type="radio" name="tab_cart_button" value="1" '.(Tools::getValue('tab_cart_button', $this->_tab_cart_button) == 1 ? 'checked="checked"' : '').' /> '.$this->l('Yes').'
							<input type="radio" name="tab_cart_button" value="0" '.(Tools::getValue('tab_cart_button', $this->_tab_cart_button) == 0 ? 'checked="checked"' : '').' /> '.$this->l('No').'
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Product Description Type').'
						</td>
						<td align="left" valign="top">
							<input type="radio" name="tab_description_type" value="1" '.(Tools::getValue('tab_description_type', $this->_tab_description_type) == 1 ? 'checked="checked"' : '').' /> '.$this->l('Short Description').'
							<input type="radio" name="tab_description_type" value="0" '.(Tools::getValue('tab_description_type', $this->_tab_description_type) == 0 ? 'checked="checked"' : '').' /> '.$this->l('Description').'
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top">
							'.$this->l('Description Length').'
						</td>
						<td align="left" valign="top">
							<input style="width:40px" type="text" name="tab_description_length" value="'.Tools::getValue('tab_description_length', $this->_tab_description_length).'" />
							'.$this->l('Define the Length of the description displayed in this block').'
						</td>
					</tr>
					<tr height="30">
						<td align="left" valign="top" colspan="2">
							<table>
							<tr height="30">
								<td align="left" valign="top">
									<b>'.$this->l('Tab Content').'</b>
								</td>
								<td>&nbsp;&nbsp;</td>
								<td align="left" valign="top">
									<b>'.$this->l('Custom ID').'</b>
								</td>
								<td>&nbsp;&nbsp;</td>
								<td align="left" valign="top">
									<b>'.$this->l('# of Products').'</b>
								</td>
								<td>&nbsp;&nbsp;</td>
								<td align="left" valign="top">
									<b>'.$this->l('Tab Order').'</b> '.$this->l('(Set to 0 to hide a tab)').'
								</td>
							</tr>
							<tr height="30">
								<td align="left" valign="top">
									'.$this->l('Featured Products').'
								</td>
								<td></td>
								<td>'.$this->l('N/A').'</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_noof_featured" value="'.Tools::getValue('tab_noof_featured', $this->_tab_noof_featured).'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_featured" value="'.Tools::getValue('tab_order_featured', $this->_tab_order_featured).'" />
								</td>
							</tr>
							<tr height="30">
								<td align="left" valign="top">
									'.$this->l('Best Sellers').'
								</td>
								<td></td>
								<td>'.$this->l('N/A').'</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_noof_topseller" value="'.Tools::getValue('tab_noof_topseller', $this->_tab_noof_topseller).'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_topseller" value="'.Tools::getValue('tab_order_topseller', $this->_tab_order_topseller).'" />
								</td>
							</tr>
							<tr height="30">
								<td align="left" valign="top">
									'.$this->l('Most Viewed Products').'
								</td>
								<td></td>
								<td>'.$this->l('N/A').'</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_noof_viewedproducts" value="'.Tools::getValue('tab_noof_viewedproducts', $this->_tab_noof_viewedproducts).'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_viewedproducts" value="'.Tools::getValue('tab_order_viewedproducts', $this->_tab_order_viewedproducts).'" />
								</td>
							</tr>
							<tr height="30">
								<td align="left" valign="top">
									'.$this->l('New Products').'
								</td>
								<td></td>
								<td>'.$this->l('N/A').'</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_noof_newproducts" value="'.Tools::getValue('tab_noof_newproducts', $this->_tab_noof_newproducts).'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_newproducts" value="'.Tools::getValue('tab_order_newproducts', $this->_tab_order_newproducts).'" />
								</td>
							</tr>
							<tr height="30">
								<td align="left" valign="top">
									'.$this->l('Specials').'
								</td>
								<td></td>
								<td>'.$this->l('N/A').'</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_noof_specialproducts" value="'.Tools::getValue('tab_noof_specialproducts', $this->_tab_noof_specialproducts).'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_specialproducts" value="'.Tools::getValue('tab_order_specialproducts', $this->_tab_order_specialproducts).'" />
								</td>
							</tr>';
		for ($i = 1 ; $i < 1 ; $i++)
			$this->_html .= '
							<tr height="30">
								<td align="left" valign="top">
									<select name="tab_custom_type_'.$i.'">
										<option value="">'.$this->l('Select Custom Tab').'</option>
										<option value="cat" '.(isset($this->_tab_custom['tab_custom_type_'.$i]) && $this->_tab_custom['tab_custom_type_'.$i] == 'cat'?'selected':'').'>'.$this->l('Category').'</option>
										<option value="man" '.(isset($this->_tab_custom['tab_custom_type_'.$i]) && $this->_tab_custom['tab_custom_type_'.$i] == 'man'?'selected':'').'>'.$this->l('Manufacturer').'</option>
										<option value="sup" '.(isset($this->_tab_custom['tab_custom_type_'.$i]) && $this->_tab_custom['tab_custom_type_'.$i] == 'sup'?'selected':'').'>'.$this->l('Supplier').'</option>
									</select>
								</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_custom_id_'.$i.'" value="'.Tools::getValue('tab_custom_id_'.$i, isset($this->_tab_custom['tab_custom_id_'.$i])?$this->_tab_custom['tab_custom_id_'.$i]:'').'" />
								</td>
								<td></td>
								<td align="left" valign="top">
									<input style="width:40px" type="tex" name="tab_noof_'.$i.'" value="'.Tools::getValue('tab_noof_'.$i, isset($this->_tab_custom['tab_custom_id_'.$i])?$this->_tab_custom['tab_custom_id_'.$i]:'').'" />
								</td>
								<td align="left" valign="top">
									&nbsp;&nbsp;&nbsp;
								</td>
								<td align="left" valign="top">
									<input style="width:40px" type="text" name="tab_order_'.$i.'" value="'.Tools::getValue('tab_order_'.$i, isset($this->_tab_custom['tab_order_'.$i])?$this->_tab_custom['tab_order_'.$i]:'').'" />
								</td>
							</tr>';
		$this->_html .='
							</table>
						</td>
					</tr>
					<tr height="30">
						<td align="center" valign="top" colspan="2">
							<input type="submit" name="SubmitHomeTab" value="'.$this->l('Save').'" class="button" />
						</td>
					</tr>
					</table>
				</fieldset>
			</form>';
		return $this->_html;
    }
    
	private function _postProcess()
	{
        if (Tools::isSubmit('SubmitHomeTab'))
        {
			$error = false;
            if (!Configuration::updateValue('TAB_CART_BUTTON', Tools::getValue('tab_cart_button')) ||
				!Configuration::updateValue('TAB_VIEW_BUTTON', Tools::getValue('tab_view_button')) ||
				!Configuration::updateValue('TAB_BG_IMAGE', Tools::getValue('tab_bg_image')) ||
				!Configuration::updateValue('TAB_TITLE_CHARS', Tools::getValue('tab_title_chars')) ||
				!Configuration::updateValue('TAB_DESCRIPTION_TYPE', Tools::getValue('tab_description_type')) ||
				!Configuration::updateValue('TAB_DESCRIPTION_LENGTH', Tools::getValue('tab_description_length')) ||
				!Configuration::updateValue('TAB_NOOF_NEWPRODUCTS', Tools::getValue('tab_noof_newproducts')) ||
				!Configuration::updateValue('TAB_NOOF_SPECIALPRODUCTS', Tools::getValue('tab_noof_specialproducts')) ||
				!Configuration::updateValue('TAB_NOOF_VIEWDPRODUCTS', Tools::getValue('tab_noof_viewedproducts')) ||
				!Configuration::updateValue('TAB_NOOF_TOPSELLER', Tools::getValue('tab_noof_topseller')) ||
				!Configuration::updateValue('TAB_NOOF_FEATURED', Tools::getValue('tab_noof_featured')) ||	
				!Configuration::updateValue('TAB_ORDER_NEWPRODUCTS',Tools::getValue('tab_order_newproducts')) ||
				!Configuration::updateValue('TAB_ORDER_SPECIALPRODUCTS',Tools::getValue('tab_order_specialproducts')) ||
				!Configuration::updateValue('TAB_ORDER_VIEWDPRODUCTS',Tools::getValue('tab_order_viewedproducts')) ||
				!Configuration::updateValue('TAB_ORDER_TOPSELLER',Tools::getValue('tab_order_topseller')) ||
				!Configuration::updateValue('TAB_ORDER_FEATURED',Tools::getValue('tab_order_featured')))
				$error = true;
			$tab_custom = array();
			for ($i = 1 ; $i < 6 ; $i++)
			{
				$tab_custom['tab_custom_type_'.$i] = Tools::getValue('tab_custom_type_'.$i);
				$tab_custom['tab_custom_id_'.$i] = Tools::getValue('tab_custom_id_'.$i);
				$tab_custom['tab_noof_'.$i] = Tools::getValue('tab_noof_'.$i);
				$tab_custom['tab_order_'.$i] = Tools::getValue('tab_order_'.$i);
			}
			if (!Configuration::updateValue('TAB_CUSTOM', serialize($tab_custom)))
				$error = true;
			if ($error)
				$this->_html .= '<div class="alert error">'.$this->l('Cannot update settings').'</div>';
			else
				$this->_html .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('Confirmation').'" />'.$this->l('Settings updated').'</div>';
            }
        $this->_refreshProperties();
	}
	
	private function getSpecialProducts($_idlang, $_noofproducts)
	{
		global	$link, $cookie;
		$currentDate = date('Y-m-d H:m:i');
		$rowspecial = Db::getInstance()->ExecuteS('
		SELECT p.*, pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, p.`ean13`,
			i.`id_image`, il.`legend`, t.`rate`
		FROM `'._DB_PREFIX_.'product` p
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.intval($_idlang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.intval($_idlang).')
		LEFT JOIN `'._DB_PREFIX_.'tax` t ON t.`id_tax` = p.`id_tax`
		WHERE (`reduction_price` > 0 OR `reduction_percent` > 0)
		AND (`reduction_from` = `reduction_to` OR (`reduction_from` <= \''.pSQL($currentDate).'\' AND `reduction_to` >= \''.pSQL($currentDate).'\'))
		AND p.`active` = 1
		AND p.`id_product` IN (
			SELECT cp.`id_product`
			FROM `'._DB_PREFIX_.'category_group` cg
			LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.`id_category` = cg.`id_category`)
			WHERE cg.`id_group` '.(!$cookie->id_customer ?  '= 1' : 'IN (SELECT id_group FROM '._DB_PREFIX_.'customer_group WHERE id_customer = '.intval($cookie->id_customer).')').'
		)
		ORDER BY RAND() LIMIT '.$_noofproducts);
		$_finalArray = array();
		$_finalData = array();
		
		if (is_array($rowspecial) && sizeof($rowspecial) >0)
		{
			foreach($rowspecial as $row)
			{    
				$_finalArray =  Product::getProductProperties($_idlang, $row);
				$_finalArray['priceWithoutReduction_tax_excl'] = round($row['price'] / (1 + $row['rate'] / 100), 2);
				if(isset($row['reduction']))
					$_finalArray['oldPrice'] = $row['price'] + $row['reduction'];
				else
					$_finalArray['oldPrice'] = $row['price'] ;
				array_push($_finalData, $_finalArray);
			}
		}
		return $_finalData;
	}
	 
	 
	function hookHeader($params)
	{
	
		global $link, $smarty, $cookie;
		$id_product = intval(Tools::getValue('id_product'));
		if ($id_product < 1)
			return;
		$this->updateproductview($id_product);	
	}
	 
	function hookHome($params)
	{
        global $link, $smarty, $cookie;		 
		$displayarray = array();			
		/********** Assign Common Properties *****************/
		$smarty->assign(array(
			'homeSize' => Image::getSize('home'),
			'titlechars' => $this->_tab_title_chars,
			'desctype' => $this->_tab_description_type,
			'desclen' => $this->_tab_description_length,
			'tab_min_height' => max(20,$this->_tab_description_length + 15), //Adjust height based on max product description length.
			'buttonstylecart' => $this->_tab_cart_button,
			'buttonstyleview' => $this->_tab_view_button 					
			));  
					
		/***********Get Best Seller Products  ********************/			
		if ($this->_tab_order_topseller != 0)
		{
            $best_sellers = ProductSale::getBestSales((int)($params['cookie']->id_lang), 0, $this->_tab_noof_topseller);
			$smarty->assign('best_sellers', $best_sellers);
			$displayarray[$this->_tab_order_topseller]['tpl'] =  $this->display(__FILE__, 'bestsellers.tpl');
			$displayarray[$this->_tab_order_topseller]['tabname'] =  $this->l('Best Sellers');
		}	
	
	  	/***********Get New Products  ********************/
		if ($this->_tab_order_newproducts != 0)
		{
			$new_products = Product::getNewProducts(intval($params['cookie']->id_lang), 0, $this->_tab_noof_newproducts);
            $smarty->assign('new_products', $new_products);
			$displayarray[$this->_tab_order_newproducts]['tpl'] =  $this->display(__FILE__, 'newproducts.tpl');
			$displayarray[$this->_tab_order_newproducts]['tabname'] =  $this->l('New Products');
		}	
				
	    /***********Get Special Products  ********************/
		if ($this->_tab_order_specialproducts != 0)
		{
			$special_products = Product::getPricesDrop((int)($params['cookie']->id_lang), 0, $this->_tab_noof_specialproducts);
            $smarty->assign('special', $special_products);
			$displayarray[$this->_tab_order_specialproducts]['tpl'] =  $this->display(__FILE__, 'specials.tpl');
			$displayarray[$this->_tab_order_specialproducts]['tabname'] =  $this->l('Specials');
		}	
				
		/***********Get Viewed Products  ********************/
		if ($this->_tab_order_viewedproducts != 0)
		{		  
			$displayarray[$this->_tab_order_viewedproducts]['tpl'] =  $this->getMostViewedProducts($params);
			$displayarray[$this->_tab_order_viewedproducts]['tabname'] =  $this->l('Most Viewed');
		}	
	
		/***********Get Featured Products  ********************/
	    if ($this->_tab_order_featured != 0)
		{
			$category = new Category(1);
			$products = $category->getProducts(intval($params['cookie']->id_lang), 1, $this->_tab_noof_featured);
			$smarty->assign('featuredproducts', $products);
			$displayarray[$this->_tab_order_featured]['tpl'] =  $this->display(__FILE__, 'featured.tpl');
			$displayarray[$this->_tab_order_featured]['tabname'] =  $this->l('Featured Products');
		}
		/***********Get Custom Pages ***************************/
		for ($i = 1 ; $i < 6 ; $i++)
		{
			if (isset($this->_tab_custom['tab_custom_type_'.$i]) && $this->_tab_custom['tab_order_'.$i] != 0)
			{
				if ($this->_tab_custom['tab_custom_type_'.$i] == 'cat')
					$obj = new Category($this->_tab_custom['tab_custom_id_'.$i]);
				$products = $obj->getProducts(intval($params['cookie']->id_lang), 1, $this->_tab_custom['tab_noof_'.$i]);
				$smarty->assign('featuredproducts', $products);
				$displayarray[$this->_tab_custom['tab_order_'.$i]]['tpl'] =  $this->display(__FILE__, 'featured.tpl');
				$displayarray[$this->_tab_custom['tab_order_'.$i]]['tabname'] =  'Custom'.$i;
			}
		}
		
		ksort($displayarray); 
		$smarty->assign('tab_bg_image' , $this->_tab_bg_image);
		$smarty->assign('tab_array_tab' ,$displayarray);
		$smarty->assign('modulepath' ,$this->_path);	
		return $this->display(__FILE__, 'homepagetabs.tpl');
	}
	
	function getMostViewedProducts($params)
	{
		global $link, $smarty, $cookie;
		$defaultCover = Language::getIsoById($params['cookie']->id_lang).'-default';
		$query = 'SELECT DISTINCT p.id_product	FROM '._DB_PREFIX_.'mostviewed mv
							LEFT JOIN '._DB_PREFIX_.'product p ON (p.id_product = mv.id_product)
							LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = p.id_product)
							LEFT JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
							LEFT JOIN '._DB_PREFIX_.'image_lang il ON (il.id_image = i.id_image)
							LEFT JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = p.id_category_default)
							WHERE pl.id_lang = '.intval($params['cookie']->id_lang).'	AND cl.id_lang = '.intval($params['cookie']->id_lang).'	AND i.cover = 1
							ORDER BY mv.view_count DESC LIMIT '.$this->_tab_noof_viewedproducts;
		$result = Db::getInstance()->ExecuteS($query);
		if (is_array($result) && sizeof($result) > 0)
		{
			foreach($result as $eachproduct)
				$productsViewed[] = $eachproduct['id_product'];
			$productIds = implode(',', $productsViewed);
			$query = 'SELECT i.id_image, p.id_product, il.legend, p.active, pl.name, pl.description, pl.description_short, pl.link_rewrite, cl.link_rewrite AS category_rewrite 
							FROM '._DB_PREFIX_.'product p
							LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (pl.id_product = p.id_product)
							LEFT JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
							LEFT JOIN '._DB_PREFIX_.'image_lang il ON (il.id_image = i.id_image)
							LEFT JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = p.id_category_default)
							WHERE p.id_product IN ('.$productIds.')
							AND pl.id_lang = '.intval($params['cookie']->id_lang).'	AND cl.id_lang = '.intval($params['cookie']->id_lang).'	AND i.cover = 1';
			$productsImages = Db::getInstance()->ExecuteS($query);
			
			if (is_array($productsImages) && sizeof($productsImages) >0)
			{
					foreach ($productsImages AS $pi)
						$_productsImagesArray[$pi['id_product']] = $pi;
			}			
			$productsViewedObj = array();
			foreach ($productsViewed AS $productViewed)
			{
				$obj = (object)'Product';
				if (!isset($_productsImagesArray[$productViewed]) || (!$obj->active = $_productsImagesArray[$productViewed]['active']))
					continue;
				else
				{
					$obj->id = intval($_productsImagesArray[$productViewed]['id_product']);
					$obj->cover = intval($_productsImagesArray[$productViewed]['id_product']).'-'.intval($_productsImagesArray[$productViewed]['id_image']);
					$obj->legend = $_productsImagesArray[$productViewed]['legend'];
					$obj->name = $_productsImagesArray[$productViewed]['name'];
					$obj->description_short = $_productsImagesArray[$productViewed]['description_short'];
					$obj->description = $_productsImagesArray[$productViewed]['description'];
					$obj->link_rewrite = $_productsImagesArray[$productViewed]['link_rewrite'];
					$obj->category_rewrite = $_productsImagesArray[$productViewed]['category_rewrite'];
					$obj->price = Product::getPriceStatic(intval($obj->id));
					$obj->price_tax_exc = Product::getPriceStatic(intval($obj->id), false);
					if (!isset($obj->cover))
					{
						$obj->cover = $defaultCover;
						$obj->legend = '';
					}
					$productsViewedObj[] = $obj;
				}
			}
			$smarty->assign('productsViewedObj',$productsViewedObj);
			return $this->display(__FILE__, 'viewed.tpl');
		}
	} 
}
?>