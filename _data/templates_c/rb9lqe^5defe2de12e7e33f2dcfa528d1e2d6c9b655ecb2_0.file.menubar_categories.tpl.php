<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb18fa3_41129860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5defe2de12e7e33f2dcfa528d1e2d6c9b655ecb2' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_categories.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb18fa3_41129860 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Albums');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']) {?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span><?php }?>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
