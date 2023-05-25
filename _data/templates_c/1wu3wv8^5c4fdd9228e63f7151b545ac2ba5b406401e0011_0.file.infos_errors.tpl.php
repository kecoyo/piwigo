<?php
/* Smarty version 4.1.0, created on 2023-05-24 22:43:35
  from '/www/piwigo/themes/default/template/infos_errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646e22976f9ca1_17167556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4fdd9228e63f7151b545ac2ba5b406401e0011' => 
    array (
      0 => '/www/piwigo/themes/default/template/infos_errors.tpl',
      1 => 1684931563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e22976f9ca1_17167556 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
<div class="errors">
  <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['infos']->value)) {?>
<div class="infos">
  <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
}
