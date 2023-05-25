<?php
/* Smarty version 4.1.0, created on 2023-05-24 22:43:54
  from '/www/piwigo/admin/themes/default/template/tabsheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646e22aa882a07_66489905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b84c9983e4e56e18d91fb16c7d46c57f79bda260' => 
    array (
      0 => '/www/piwigo/admin/themes/default/template/tabsheet.tpl',
      1 => 1684931538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e22aa882a07_66489905 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['tabsheet']->value)) && count($_smarty_tpl->tpl_vars['tabsheet']->value)) {?>
<div id="tabsheet">
<ul class="tabsheet">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabsheet']->value, 'sheet', false, 'name');
$_smarty_tpl->tpl_vars['sheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['sheet']->value) {
$_smarty_tpl->tpl_vars['sheet']->do_else = false;
?>
  <li class="<?php if (($_smarty_tpl->tpl_vars['name']->value == $_smarty_tpl->tpl_vars['tabsheet_selected']->value)) {?>selected_tab<?php } else { ?>normal_tab<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['sheet']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['sheet']->value['caption'];?>
</span></a>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }
}
}
