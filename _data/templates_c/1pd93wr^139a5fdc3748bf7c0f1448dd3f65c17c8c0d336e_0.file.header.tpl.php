<?php
/* Smarty version 4.1.0, created on 2023-05-23 22:57:28
  from '/www/wwwroot/piwigo/themes/default/template/mail/text/html/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd4584811d7_34336430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '139a5fdc3748bf7c0f1448dd3f65c17c8c0d336e' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/mail/text/html/header.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd4584811d7_34336430 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
"/>
    <title>Piwigo Mail</title>

    <style type="text/css">
    <?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value;
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['MAIL_CSS']->value))) {
echo $_smarty_tpl->tpl_vars['MAIL_CSS']->value;
}?>
    </style>
  </head>

  <body>
    <table id="bodyTable" cellspacing="0" cellpadding="10" border="0">
      <tr><td align="center" valign="top">

        <table id="contentTable" cellspacing="0" cellpadding="0" border="0">
          <tr><td id="header">
                        <div id="title"><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {?><div id="subtitle"><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>
</div><?php }?>
                      </td></tr>

          <tr><td id="content">
            <div id="topSpacer"></div>
            <?php }
}
