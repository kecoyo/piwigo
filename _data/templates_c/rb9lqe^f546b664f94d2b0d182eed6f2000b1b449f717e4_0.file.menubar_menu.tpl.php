<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb2deb4_04292990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f546b664f94d2b0d182eed6f2000b1b449f717e4' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_menu.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb2deb4_04292990 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Menu');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if (is_array($_smarty_tpl->tpl_vars['link']->value)) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['TITLE']))) {
echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['link']->value['COUNTER']))) {?><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['link']->value['COUNTER'];?>
</span><?php }?></li>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
