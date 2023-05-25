<?php
/* Smarty version 4.1.0, created on 2023-05-24 23:17:21
  from '/www/piwigo/admin/themes/default/template/photos_add_ftp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646e2a814c7077_38331978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f3e6d6365144d3b6191faa8d6a43cbf78827ac' => 
    array (
      0 => '/www/piwigo/admin/themes/default/template/photos_add_ftp.tpl',
      1 => 1684931538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e2a814c7077_38331978 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ftpPage">
<p><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><?php echo l10n('Administration');?>
 &raquo; <?php echo l10n('Tools');?>
 &raquo; <?php echo l10n('Synchronize');?>
</a></p>

<?php echo $_smarty_tpl->tpl_vars['FTP_HELP_CONTENT']->value;?>

</div><?php }
}
