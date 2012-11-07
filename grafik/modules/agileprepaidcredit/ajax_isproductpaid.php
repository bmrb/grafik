<?php
///==========================================================================================
/// NOTICE OF LICENSE & DISCLAIMER
///
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
///	We donot recomend to make any changes(customizations) to the PHP files, othrwise you are
///	not able to upagrde your modules.
///
/// If you do need to make changes to source code files, please consult us first.
/// http://addons-modules.com/en/contact-us
///
///	Vist our support forum if you require technical support
/// http://addons-modules.com/modules/agileforumphpbb/agileforum.php
///
/// @copyright  2009-2012 Addons-Modules.com
/// 
///==========================================================================================

require_once(dirname(__FILE__).'/../../config/config.inc.php');  require_once(dirname(__FILE__).'/../../init.php');  require_once(dirname(__FILE__).'/agileprepaidcredit.php');    $agile_pid = intval(Tools::getValue('id_product'));  if($agile_pid<=0)die('Invalid Product ID');  $agile_paid = intval(Tools::getValue('id_product_attribute'));  $istoken = agileprepaidcredit::IsProductInLinkedCategory($agile_pid);  $ispaid = agileprepaidcredit::IsProductPaidByCustomer($agile_pid,self::$cookie->id_customer);  if(!$istoken AND $agile_pid)  {      $prod = new Product($agile_pid);      if(!self::$cookie->isLogged())die('Not Logged In');      $balance = agileprepaidcredit::GetToeknBalance(self::$cookie->id_customer);      if($balance < $prod->price)die('No balance');     if(!$ispaid)die('PAID');  }  