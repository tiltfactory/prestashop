<?php /*%%SmartyHeaderCode:198789060655dae4232e42e4-95970358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a532e623c3f2eebecdcc97f17a77fb5d2f6e1d4a' => 
    array (
      0 => '/var/www/prestashop/www/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198789060655dae4232e42e4-95970358',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55daec6cb39b66_54455878',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daec6cb39b66_54455878')) {function content_55daec6cb39b66_54455878($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//prestashop.vag/fr/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
