<?php /* Smarty version Smarty-3.0.7, created on 2012-10-18 11:39:02
         compiled from "/home/graf546/domains/grafikstock.com/public_html/grafik/modules/blockcategories/blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969615158507fdc46249eb3-11545914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88cb9bd0f4c1fa3b0033e5d011d9d180d1d7904a' => 
    array (
      0 => '/home/graf546/domains/grafikstock.com/public_html/grafik/modules/blockcategories/blockcategories.tpl',
      1 => 1348030560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969615158507fdc46249eb3-11545914',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Block categories module -->
<link rel="stylesheet" media="screen" href="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
css/superfish.css" /> 
<link rel="stylesheet" media="screen" href="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
css/superfish-vertical.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
js/hoverIntent.js" ></script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
js/superfish.min.js" ></script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('module_dir')->value;?>
js/matching_columns.js" ></script> 
 
<script> 
 
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish({ 
            animation: {height:'show'},   // slide-down effect without fade-in 
            delay:     1200               // 1.2 second delay on mouseout 
        }); 
    }); 
 
</script>
 
    				
    

                
        <!-- style="position: absolute;"     -->   
                
<div id="categories_block_left" class="block">
	<h4>Artwork types</h4>
    
        <div class="block_content" style="height:150px;">
        
		<ul class="sf-menu sf-vertical sf-js-enabled sf-shadow column">
									
<li>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
search.php?tag=graphic library">graphic library</a>
	</li>
												
<li>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
44-labels-tags">labels & tags</a>
	</li>
												
<li>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
45-all-over-print">all over print</a>
	</li>
												
<li>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
46-shapes">shapes</a>
	</li>
												
<li>
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
47-technical-card">technical cards</a>
	</li>
												
<li>
<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
48-washing-symbol">washing symbol</a>
	</li>
												
<li>
<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
49-graphics-for-manufacturig">graphics for<br /> manufacturing</a>
	</li>
												

												

							</ul>
	</div>
</div>	

<div id="categories_block_left" class="block">
	<h4>View by Categories</h4>
    
        <div class="block_content" style="height:480px;">
        
		<ul class="sf-menu sf-vertical sf-js-enabled sf-shadow column">
									
<li>
	<a href="http://www.grafikstock.com/grafik/38-womenswear" class="selected" title="">womenswear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/39-menswear" title="">menswear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/40-kidswear" title="">kidswear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/41-streetwear" title="">streetwear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/42-beachwear" title="">beachwear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/43-casualwear" title="">casualwear</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/4-vintage" title="">vintage</a>
	</li>
												
<li>
	<a href="http://www.grafikstock.com/grafik/5-music" title="">music </a>
	</li>
												

							</ul>
	</div>
</div>
<!-- /Block categories module -->
