<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:25:12
  from '/www/wwwroot/piwigo/themes/default/template/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646d9fb8ae41d0_63879899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d1e8b00ac4277f2e7617f75e1c3c83fcc0958ce' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/redirect.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646d9fb8ae41d0_63879899 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin:2em;text-align:center;font-size:larger">
	<?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<p style="margin:2em;text-align:center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
		<?php echo l10n('Click here if your browser does not automatically forward you');?>

	</a>
</p>
<?php }
}
