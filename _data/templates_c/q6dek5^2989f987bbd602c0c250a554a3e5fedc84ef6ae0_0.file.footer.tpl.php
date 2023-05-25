<?php
/* Smarty version 4.1.0, created on 2023-05-23 22:57:28
  from '/www/wwwroot/piwigo/themes/default/template/mail/text/plain/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd45849f613_18612284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2989f987bbd602c0c250a554a3e5fedc84ef6ae0' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/mail/text/plain/footer.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd45849f613_18612284 (Smarty_Internal_Template $_smarty_tpl) {
?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;
}
}
