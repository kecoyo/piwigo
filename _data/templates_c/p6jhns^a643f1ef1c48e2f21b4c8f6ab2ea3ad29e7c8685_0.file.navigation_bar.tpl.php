<?php
/* Smarty version 4.1.0, created on 2023-05-24 10:37:14
  from '/www/wwwroot/piwigo/admin/themes/default/template/navigation_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646d785a8906f0_21558900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a643f1ef1c48e2f21b4c8f6ab2ea3ad29e7c8685' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/navigation_bar.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646d785a8906f0_21558900 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagination-container">
<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST']))) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" class='pagination-arrow left' rel="prev">
    <span class="icon-left-open"></span>
  </a>
<?php } else { ?>
  <a class='pagination-arrow left unavailable'>
    <span class="icon-left-open"></span>
  </a>
<?php }?>
  <?php $_smarty_tpl->_assignInScope('prev_page', 0);?>
  <div class="pagination-item-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value['pages'], 'url', false, 'page');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['prev_page']->value+1) {?><span>...</span><?php }
if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']) {?>
    <a class="actual"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }?>
    <?php $_smarty_tpl->_assignInScope('prev_page', $_smarty_tpl->tpl_vars['page']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT']))) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" class='pagination-arrow rigth' rel="next">
    <span class="icon-left-open"></span>
  </a>
<?php } else { ?>
  <a class='pagination-arrow rigth unavailable'>
    <span class="icon-left-open"></span>
  </a>
<?php }?>
</div>
<?php }
}
