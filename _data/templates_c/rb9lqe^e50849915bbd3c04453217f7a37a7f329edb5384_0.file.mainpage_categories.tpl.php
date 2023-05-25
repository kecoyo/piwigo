<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/mainpage_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb4b9a8_87618288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e50849915bbd3c04453217f7a37a7f329edb5384' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/mainpage_categories.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb4b9a8_87618288 (Smarty_Internal_Template $_smarty_tpl) {
?><ul data-role="listview" data-inset="true">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_thumbnails']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pwg']->value->derivative_url($_smarty_tpl->tpl_vars['thumbnail_derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']);?>
">
    <h3><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</h3>
		<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
		</a>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
