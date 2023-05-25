<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:00:01
  from '/www/wwwroot/piwigo/admin/themes/default/template/tabsheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd4f14ca680_02429357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aeaff9edb2db5c70c9d547bff04d76492e23e8d' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/tabsheet.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd4f14ca680_02429357 (Smarty_Internal_Template $_smarty_tpl) {
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
