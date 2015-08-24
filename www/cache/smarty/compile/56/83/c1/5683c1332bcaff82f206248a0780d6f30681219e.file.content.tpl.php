<?php /* Smarty version Smarty-3.1.19, created on 2015-08-24 12:57:58
         compiled from "/var/www/prestashop/www/admin561fhbahr/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13554890155daf8b64a3391-76859748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5683c1332bcaff82f206248a0780d6f30681219e' => 
    array (
      0 => '/var/www/prestashop/www/admin561fhbahr/themes/default/template/content.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13554890155daf8b64a3391-76859748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55daf8b64c59d6_78117577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf8b64c59d6_78117577')) {function content_55daf8b64c59d6_78117577($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
