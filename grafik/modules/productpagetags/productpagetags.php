<?php                                                         //  for PrestaShop v1.4
if (!defined('_CAN_LOAD_FILES_'))
        exit;

class productpagetags extends Module
{
    function __construct()
    {
        $this->displayName = 'Product Page Tags';
        $this->description = 'cross-sell: each product page provides links to similarly-tagged items';
        $this->name = 'productpagetags';
        $this->version = 1.0;
        $this->author = 'Yer mom';
        $this->tab = 'front_office_features';
        parent::__construct();
        $this->page = basename(__FILE__, '.php');
    }

    function install()
    {
           if ( !parent::install() OR !$this->registerHook('productFooter') )     // OR  !$this->registerHook('header')  // header hook not required (not injecting addCSS call)
                  return false;
           return true;
    }

    function uninstall() {  return parent::uninstall();  }

    function hookproductfooter($params)
    {
        global $smarty;
        $tags = array();
        $product = new Product(  intval(Tools::getValue('id_product')) );
        if (!Validate::isLoadedObject($product))
                return '';
        $temp = explode(",", $product->getTags(_USER_ID_LANG_) );
        foreach ($temp as $value)
        {
                $tag = new Tag(null, trim($value), _USER_ID_LANG_ );
                if (!Validate::isLoadedObject($tag))
                        continue;
                $tags = $tag;
                unset($tag);
        }
                        $tags = Tag::getProductTags( intval(Tools::getValue('id_product')) );
                        $tags = $tags[intval(_USER_ID_LANG_)];
        $smarty->assign('tags', $tags);
        return $this->display(__FILE__, 'productpagetags.tpl');
    }

//  public function hookHeader($params) {  Tools::addCSS(($this->_path).'productpagetags.css', 'all');  }    //  just say NO! to gratuitious css includes

}