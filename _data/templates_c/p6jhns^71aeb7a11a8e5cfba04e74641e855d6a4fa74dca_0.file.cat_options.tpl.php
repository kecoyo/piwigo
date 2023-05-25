<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:02:55
  from '/www/wwwroot/piwigo/admin/themes/default/template/cat_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd59fc0eef5_56225737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71aeb7a11a8e5cfba04e74641e855d6a4fa74dca' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/cat_options.tpl',
      1 => 1684853486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd59fc0eef5_56225737 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="cat_options">
  <fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['L_SECTION']->value;?>
</legend>
    <?php echo $_smarty_tpl->tpl_vars['DOUBLE_SELECT']->value;?>

  </fieldset>
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form>

<?php }
}
