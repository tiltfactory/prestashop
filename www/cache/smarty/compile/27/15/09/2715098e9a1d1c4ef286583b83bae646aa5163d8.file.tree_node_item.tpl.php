<?php /* Smarty version Smarty-3.1.19, created on 2015-08-24 09:21:26
         compiled from "/var/www/prestashop/www/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50448136455dae216da5370-60190815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2715098e9a1d1c4ef286583b83bae646aa5163d8' => 
    array (
      0 => '/var/www/prestashop/www/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50448136455dae216da5370-60190815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55dae216db9e91_94845921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dae216db9e91_94845921')) {function content_55dae216db9e91_94845921($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
