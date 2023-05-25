<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb374c5_35614853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a5f0dca168151c7ce57d2c2bd4a52e276ebe0b' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/menubar_identification.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb374c5_35614853 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo l10n('Identification');?>
</h3>
<ul data-role="listview">
  <?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
"><?php echo l10n('Register');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_LOGIN']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
"><?php echo l10n('Login');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php echo l10n('Customize');?>
</a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['U_ADMIN']->value))) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
"><?php echo l10n('Administration');?>
</a></li><?php }?>
</ul>
<?php }
}
