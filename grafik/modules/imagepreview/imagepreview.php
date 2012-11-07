<?php

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class imagepreview extends Module
{
	private $_html = '';
	private $_postErrors = array();
	
	function __construct()
	{
		$this->name = 'imagepreview';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Prestaholic';
		$this->need_instance = 0;

		parent::__construct();
		
		$this->displayName = $this->l('Image Preview');
		$this->description = $this->l('Display an large image preview.');
	}

	function install()
	{
		if (
		!Configuration::updateValue('ENABLED_TOOLTIP', 'true') OR 
		!Configuration::updateValue('ENABLED_STICKY', 'false') OR
		!Configuration::updateValue('ENABLED_MOUSE', 'true') OR 
		!Configuration::updateValue('PREVIEW_BGCOLOR', '#000') OR 
		!Configuration::updateValue('PREVIEW_TITLECOLOR', '#FFF') OR 
		!Configuration::updateValue('PREVIEW_SPEED', '300') OR 
		!Configuration::updateValue('PREVIEW_DIRECTION', 'n') OR
		!Configuration::updateValue('PREVIEW_ZINDEX', '1000') OR 
		!Configuration::updateValue('PREVIEW_IMAGETYPE', 'home') OR 
		!Configuration::updateValue('PREVIEW_ADDREL','div.products_block ul li a.product_image,ul#product_list li a.product_img_link') OR
		!parent::install() OR 
		!$this->registerHook('header'))

			return false;
		return true;
	}
	
	function uninstall()
	{
		if (
		!Configuration::deleteByName('ENABLED_TOOLTIP') OR 
		!Configuration::deleteByName('ENABLED_STICKY') OR 
		!Configuration::deleteByName('ENABLED_MOUSE') OR 
		!Configuration::deleteByName('PREVIEW_BGCOLOR') OR 
		!Configuration::deleteByName('PREVIEW_TITLECOLOR') OR 
		!Configuration::deleteByName('PREVIEW_SPEED') OR 
		!Configuration::deleteByName('PREVIEW_DIRECTION') OR 
		!Configuration::deleteByName('PREVIEW_ZINDEX') OR
		!Configuration::deleteByName('PREVIEW_IMAGETYPE') OR 
		!Configuration::deleteByName('PREVIEW_ADDREL') OR
		!parent::uninstall())

			return false;
		return true;
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';

		if (Tools::isSubmit('submitimagepreview'))
		{
				Configuration::updateValue('ENABLED_TOOLTIP', Tools::getValue('tooltip'));
				Configuration::updateValue('ENABLED_STICKY', Tools::getValue('sticky'));
				Configuration::updateValue('ENABLED_MOUSE', Tools::getValue('mouse'));
				Configuration::updateValue('PREVIEW_BGCOLOR', Tools::getValue('bgcolor'));
				Configuration::updateValue('PREVIEW_TITLECOLOR', Tools::getValue('titlecolor'));
				Configuration::updateValue('PREVIEW_SPEED', Tools::getValue('speed'));
				Configuration::updateValue('PREVIEW_DIRECTION', Tools::getValue('direction'));
				Configuration::updateValue('PREVIEW_ZINDEX', Tools::getValue('zindex'));
				Configuration::updateValue('PREVIEW_ADDREL', Tools::getValue('addrel'));
				Configuration::updateValue('PREVIEW_IMAGETYPE', Tools::getValue('imagetype'));

			if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{ 
		$direction = array('n','ne','e','se','s','sw','w','nw');	
		$output = '<script type="text/javascript" src="'._MODULE_DIR_.$this->name.'/js/jquery.color.picker.js"></script>
		<link rel="stylesheet" href="'._MODULE_DIR_.$this->name.'/css/colorpicker.css" type="text/css" media="screen" />		
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
		<fieldset>
		<legend><img src="../img/admin/AdminTools.gif">'.$this->displayName.' '.$this->l('Settings').'</legend>
				<input type="submit" name="submitimagepreview" value="'.$this->l('Save').'" class="button"/>
				<p class="clear">&nbsp;</p>
					<label>'.$this->l('Enable Image Preview:').'</label>
				<div class="margin-form">
					<select name="tooltip">
						<option value="true" '.(Tools::getValue('tooltip', Configuration::get('ENABLED_TOOLTIP')) == 'true' ? 'selected="selected"' : '').'>true</option>
						<option value="false" '.(Tools::getValue('tooltip', Configuration::get('ENABLED_TOOLTIP')) == 'false' ? 'selected="selected"' : '').'>false</option>	
					</select>
					<p class="clear">'.$this->l('Display image preview (default: true).').'</p>
				</div>
				<label>'.$this->l('Image Type Name').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="imagetype" value="'.Tools::getValue('imagetype', Configuration::get('PREVIEW_IMAGETYPE')).'" />
					<p class="clear">'.$this->l('Image type name used in product list (default: home).').'</p>
				</div>
				
					<label>'.$this->l('Add Rel to Product Image Link:').'</label>
				<div class="margin-form">
					<textarea name="addrel" rows="3" cols="100" class="rte">'.Tools::getValue('addrel', (Configuration::get('PREVIEW_ADDREL'))).'</textarea>
				</div>
					<label>'.$this->l('Make Sticky:').'</label>
				<div class="margin-form">
					<select name="sticky">
						<option value="true" '.(Tools::getValue('sticky', Configuration::get('ENABLED_STICKY')) == 'true' ? 'selected="selected"' : '').'>true</option>
						<option value="false" '.(Tools::getValue('sticky', Configuration::get('ENABLED_STICKY')) == 'false' ? 'selected="selected"' : '').'>false</option>	
					</select>
					<p class="clear">'.$this->l('Enable this to make the preview sticky. Only one preview on the screen at a time though (default: false).').'</p>
				</div>
					<label>'.$this->l('Follow Mouse:').'</label>
				<div class="margin-form">
					<select name="mouse">
						<option value="true" '.(Tools::getValue('mouse', Configuration::get('ENABLED_MOUSE')) == 'true' ? 'selected="selected"' : '').'>true</option>
						<option value="false" '.(Tools::getValue('mouse', Configuration::get('ENABLED_MOUSE')) == 'false' ? 'selected="selected"' : '').'>false</option>	
					</select>
					<p class="clear">'.$this->l('Preview follows mouse movement (default: true).').'</p>
				</div>
				<label>'.$this->l('Background Color:').'</label>
				<script type="text/javascript">
        jQuery(document).ready(function($) {  
          $("#bgcolor").ColorPicker({
            onSubmit: function(hsb, hex, rgb) {
            	$("#bgcolor").val("#"+hex);
            },
            onBeforeShow: function () {
            	$(this).ColorPickerSetColor(this.value);
            	return false;
            },
            onChange: function (hsb, hex, rgb) {
            	$("#bodybgcolor div").css({"backgroundColor":"#"+hex, "backgroundImage": "none", "borderColor":"#"+hex});
            	$("#bodybgcolor").prev("input").attr("value", "#"+hex);
            }
          })	
          .bind("keyup", function(){
            $(this).ColorPickerSetColor(this.value);
          });
        });
        </script>
				<div class="margin-form">
					<input type="text" size="8" id="bgcolor" name="bgcolor" value="'.Tools::getValue('bgcolor', Configuration::get('PREVIEW_BGCOLOR')).'" />
				<div id="bodybgcolor" class="cp_box">
          <div style="background-color:'.Tools::getValue('bgcolor', Configuration::get('PREVIEW_BGCOLOR')).'; background-image:none"> 
          </div>
        </div>
				<p class="clear">'.$this->l('Enter the background color (default: #000).').'</p>
				</div>	

				<label>'.$this->l('Title Color:').'</label>
				<script type="text/javascript">
        jQuery(document).ready(function($) {  
          $("#titlecolor").ColorPicker({
            onSubmit: function(hsb, hex, rgb) {
            	$("#titlecolor").val("#"+hex);
            },
            onBeforeShow: function () {
            	$(this).ColorPickerSetColor(this.value);
            	return false;
            },
            onChange: function (hsb, hex, rgb) {
            	$("#bodytitlecolor div").css({"backgroundColor":"#"+hex, "backgroundImage": "none", "borderColor":"#"+hex});
            	$("#bodytitlecolor").prev("input").attr("value", "#"+hex);
            }
          })	
          .bind("keyup", function(){
            $(this).ColorPickerSetColor(this.value);
          });
        });
        </script>
				<div class="margin-form">
					<input type="text" size="8" id="titlecolor" name="titlecolor" value="'.Tools::getValue('titlecolor', Configuration::get('PREVIEW_TITLECOLOR')).'" />
				<div id="bodytitlecolor" class="cp_box">
          <div style="background-color:'.Tools::getValue('titlecolor', Configuration::get('PREVIEW_TITLECOLOR')).'; background-image:none"> 
          </div>
        </div>
				<p class="clear">'.$this->l('Enter the title color (default: #fff).').'</p>
				</div>		
				<label>'.$this->l('Direction').'</label>
				<div class="margin-form">
					<select name="direction">
					';
					for ($i = 0; $i <= 7; $i++)
						$output .= '<option value="' . $direction[$i] . '" '.(Tools::getValue('direction', Configuration::get('DIRECTION_SPEED')) ==  $direction[$i] ? 'selected="selected"' : '').'>'. $direction[$i] .'</option>';
					$output .= '																																																																									
					</select>
					<p class="clear">'.$this->l('Direction of preview (default: n).').'</p>
				</div>
				<label>'.$this->l('Speed').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="speed" value="'.Tools::getValue('speed', (int)(Configuration::get('PREVIEW_SPEED'))).'" />
					<p class="clear">'.$this->l('Preview fadein speed (default: 300).').'</p>
				</div>
				<label>'.$this->l('Z-Index').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="zindex" value="'.Tools::getValue('zindex', (int)(Configuration::get('PREVIEW_ZINDEX'))).'" />
					<p class="clear">'.$this->l('Z-index of preview (default: 1000).').'</p>
				</div>				
				
				<p class="clear">&nbsp;</p>
				<input type="submit" name="submitimagepreview" value="'.$this->l('Save').'" class="button"/>
		</fieldset>
		</form>
		';
		return $output;
	}


	function hookHeader($params)
	{
	
  	global $smarty;

		$smarty->assign(array(
		'tooltip' => Configuration::get('ENABLED_TOOLTIP'),
		'imagetype' => Configuration::get('PREVIEW_IMAGETYPE'),
		'addrel' => Configuration::get('PREVIEW_ADDREL'),
		'sticky' => Configuration::get('ENABLED_STICKY'),
		'mouse' => Configuration::get('ENABLED_MOUSE'),
		'bgcolor' => Configuration::get('PREVIEW_BGCOLOR'),
		'titlecolor' => Configuration::get('PREVIEW_TITLECOLOR'),
		'direction' => Configuration::get('PREVIEW_DIRECTION'),
		'zindex' => Configuration::get('PREVIEW_ZINDEX'),
		'speed' => Configuration::get('PREVIEW_SPEED')));
		return $this->display(__FILE__, 'header.tpl');
	
	}

   
}
