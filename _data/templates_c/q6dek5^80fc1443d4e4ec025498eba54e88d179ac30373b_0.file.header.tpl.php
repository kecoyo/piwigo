<?php
/* Smarty version 4.1.0, created on 2023-05-23 22:57:28
  from '/www/wwwroot/piwigo/themes/default/template/mail/text/plain/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd458499e69_83784716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80fc1443d4e4ec025498eba54e88d179ac30373b' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/mail/text/plain/header.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd458499e69_83784716 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}
