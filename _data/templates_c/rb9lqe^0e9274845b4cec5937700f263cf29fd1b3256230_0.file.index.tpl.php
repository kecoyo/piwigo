<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb70d78_51535046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9274845b4cec5937700f263cf29fd1b3256230' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/index.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb70d78_51535046 (Smarty_Internal_Template $_smarty_tpl) {
?><div data-role="content">
<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;
}
if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {
echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;
}
if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;
}?>
</div>

<?php }
}
