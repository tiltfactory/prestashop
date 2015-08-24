<?php /* Smarty version Smarty-3.1.19, created on 2015-08-24 09:21:13
         compiled from "/var/www/prestashop/www/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179242299855dae209688ec5-18203660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee35124abec96f72f76083d60aa3f6425faf2a12' => 
    array (
      0 => '/var/www/prestashop/www/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179242299855dae209688ec5-18203660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55dae2096983a4_37160868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dae2096983a4_37160868')) {function content_55dae2096983a4_37160868($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
