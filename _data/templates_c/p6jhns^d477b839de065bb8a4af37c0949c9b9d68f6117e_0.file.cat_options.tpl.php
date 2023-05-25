<?php
/* Smarty version 4.1.0, created on 2023-05-25 20:14:29
  from '/www/piwigo/admin/themes/default/template/cat_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646f51254dab09_41467760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd477b839de065bb8a4af37c0949c9b9d68f6117e' => 
    array (
      0 => '/www/piwigo/admin/themes/default/template/cat_options.tpl',
      1 => 1684931538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646f51254dab09_41467760 (Smarty_Internal_Template $_smarty_tpl) {
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
