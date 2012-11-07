<?php /* Smarty version Smarty-3.0.7, created on 2012-04-10 01:18:50
         compiled from "C:\wamp\www\grafik/modules/blockcategories/blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127454f837c6a8ff976-49212090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da7b1611d84c18d366ee14cf85df1de5eab0094' => 
    array (
      0 => 'C:\\wamp\\www\\grafik/modules/blockcategories/blockcategories.tpl',
      1 => 1334015723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127454f837c6a8ff976-49212090',
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
                
	

<div id="categories_block_left" class="blockx">
	<h4>Kategoriler</h4>
    
        <div class="block_content">
        
		<ul class="sf-menu sf-vertical sf-js-enabled sf-shadow columnx">
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blockCategTree')->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
if ($_smarty_tpl->tpl_vars['child']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']){?>
				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('branche_tpl_path')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
$_template->assign('node',$_smarty_tpl->tpl_vars['child']->value);$_template->assign('last','true'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php }else{ ?>
				<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('branche_tpl_path')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
$_template->assign('node',$_smarty_tpl->tpl_vars['child']->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			<?php }?>
		<?php }} ?>
		</ul>
	</div>
</div>
<!-- /Block categories module -->
