<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb24749_54512361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80b609ae4881060edc735ba6e9623f2ea9b81bf' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_specials.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb24749_54512361 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Specials');?>
</h3>
<ul data-role="listview">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'link', false, 'key');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['key']->value,array("favorites","most_visited","best_rated","recent_pics","recent_cats","random"))) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
