<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:40:54
  from '/www/wwwroot/piwigo/themes/default/template/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da366170181_36838147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1498fd53a2f0c12ec1289f1118bb94fbf3beae7d' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/profile.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_646da366170181_36838147 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Profile');?>
</h2>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['PROFILE_CONTENT']->value;?>

</div> <!-- content -->
<?php }
}
