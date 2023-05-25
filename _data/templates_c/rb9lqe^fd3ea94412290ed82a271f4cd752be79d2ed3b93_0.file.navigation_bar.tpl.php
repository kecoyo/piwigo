<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:52
  from '/www/wwwroot/piwigo/themes/smartpocket/template/navigation_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da3a0b22ab9_26625029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3ea94412290ed82a271f4cd752be79d2ed3b93' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/navigation_bar.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da3a0b22ab9_26625029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo end($_smarty_tpl->tpl_vars['navbar']->value['pages']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div data-role="footer" class="ui-bar ui-bar-a" style="text-align:center;">
<div data-role="controlgroup" data-type="horizontal">
<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_PREV']))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" rel="prev" data-role="button" data-icon="arrow-l" data-inline="true"><?php echo l10n('Previous');?>
</a><?php }?><a href="#" data-role="button" data-inline="true"><?php echo $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE'];?>
 / <?php echo key($_smarty_tpl->tpl_vars['navbar']->value['pages']);?>
&nbsp;</a><?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT']))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" rel="next" data-role="button" data-icon="arrow-r" data-iconpos="right" data-inline="true"><?php echo l10n('Next');?>
</a><?php }?>
</div>
</div>
<?php }
}
