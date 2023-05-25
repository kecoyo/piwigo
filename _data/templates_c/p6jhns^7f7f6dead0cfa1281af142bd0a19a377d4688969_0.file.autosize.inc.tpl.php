<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:02:59
  from '/www/wwwroot/piwigo/admin/themes/default/template/include/autosize.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd5a39361f6_90218793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7f6dead0cfa1281af142bd0a19a377d4688969' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/include/autosize.inc.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd5a39361f6_90218793 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.autogrow','load'=>'async','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.autogrow-textarea.js'),$_smarty_tpl ) );?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.autogrow'));
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery.autogrow'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
	jQuery('textarea').css('overflow-y', 'hidden');
	// Auto size and auto grow for all text area
	jQuery('textarea').autogrow();
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery.autogrow'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
