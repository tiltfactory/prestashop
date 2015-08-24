<?php /* Smarty version Smarty-3.1.19, created on 2015-08-24 09:20:54
         compiled from "/var/www/prestashop/www/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21365660655dae1f6cf6277-95461707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2dc6239fdea40be6650ba33c76e6e14b015d819' => 
    array (
      0 => '/var/www/prestashop/www/admin/themes/default/template/content.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21365660655dae1f6cf6277-95461707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55dae1f6d38711_13564639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dae1f6d38711_13564639')) {function content_55dae1f6d38711_13564639($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
