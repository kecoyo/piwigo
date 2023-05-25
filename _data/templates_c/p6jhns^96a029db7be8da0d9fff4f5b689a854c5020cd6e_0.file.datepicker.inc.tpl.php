<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:02:52
  from '/www/wwwroot/piwigo/admin/themes/default/template/include/datepicker.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd59c86adb3_07100221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a029db7be8da0d9fff4f5b689a854c5020cd6e' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/include/datepicker.inc.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd59c86adb3_07100221 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.timepicker-addon','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker,jquery.ui.slider','path'=>"themes/default/js/ui/jquery.ui.timepicker-addon.js"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('require', 'jquery.ui.timepicker-addon');
$_smarty_tpl->_assignInScope('datepicker_language', "themes/default/js/ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js");
if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['datepicker_language']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker','path'=>$_smarty_tpl->tpl_vars['datepicker_language']->value),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('require', ($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])));
}?>

<?php $_smarty_tpl->_assignInScope('timepicker_language', "themes/default/js/ui/i18n/jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js");
if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['datepicker_language']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.timepicker-addon','path'=>$_smarty_tpl->tpl_vars['timepicker_language']->value),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('require', ($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])));
}?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'datepicker','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>$_smarty_tpl->tpl_vars['require']->value,'path'=>'admin/themes/default/js/datepicker.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.theme.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.datepicker.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.timepicker-addon.css"),$_smarty_tpl ) );
}
}
