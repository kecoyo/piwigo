<?php
/* Smarty version 4.1.0, created on 2023-05-25 00:09:36
  from '/www/piwigo/themes/default/template/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646e36c06515f0_98712812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a83216ab6639006eee1ec55e75e95a9623bb62' => 
    array (
      0 => '/www/piwigo/themes/default/template/redirect.tpl',
      1 => 1684931563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e36c06515f0_98712812 (Smarty_Internal_Template $_smarty_tpl) {
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
