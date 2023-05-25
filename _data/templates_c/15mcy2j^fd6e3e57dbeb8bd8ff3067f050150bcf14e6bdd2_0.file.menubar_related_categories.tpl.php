<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:11
  from '/www/wwwroot/piwigo/themes/default/template/menubar_related_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da377efddd7_32723523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6e3e57dbeb8bd8ff3067f050150bcf14e6bdd2' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/default/template/menubar_related_categories.tpl',
      1 => 1684853471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da377efddd7_32723523 (Smarty_Internal_Template $_smarty_tpl) {
?><dt>
	<?php echo l10n('Related albums');?>

</dt>
<dd>
<?php $_smarty_tpl->_assignInScope('ref_level', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
if ($_smarty_tpl->tpl_vars['cat']->value['LEVEL'] > $_smarty_tpl->tpl_vars['ref_level']->value) {?>
  <ul>
<?php } else { ?>
    </li>
    <?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['ref_level']->value-$_smarty_tpl->tpl_vars['cat']->value['LEVEL']));?>

<?php }?>
    <li>
<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['TITLE']))) {?>
      <a href="<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['url']))) {
echo $_smarty_tpl->tpl_vars['cat']->value['url'];
}?>" title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
<?php } else { ?>
      <a href="<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['url']))) {
echo $_smarty_tpl->tpl_vars['cat']->value['url'];
}?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['cat']->value['count_images'])) && $_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?>
      <span class="badge" title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['cat']->value['count_images']);?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span>
<?php }
if ((isset($_smarty_tpl->tpl_vars['cat']->value['count_categories'])) && $_smarty_tpl->tpl_vars['cat']->value['count_categories'] > 0) {?>
      <span class="badge badgeCategories" title="<?php echo l10n('sub-albums');?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_categories'];?>
</span>
<?php }?>
  <?php $_smarty_tpl->_assignInScope('ref_level', $_smarty_tpl->tpl_vars['cat']->value['LEVEL']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo str_repeat('</li></ul>',$_smarty_tpl->tpl_vars['ref_level']->value);?>

</dd>
<?php }
}
