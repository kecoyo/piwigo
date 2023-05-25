<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:02:55
  from '/www/wwwroot/piwigo/admin/themes/default/template/double_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd59fc0af17_26325060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a224f5b5c2cb1136befe4ed968332e8c3e06fae' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/double_select.tpl',
      1 => 1684853486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd59fc0af17_26325060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<table class="doubleSelect">
  <tr>
    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_TRUE']->value;?>
</h3>
      <select class="categoryList" name="cat_true[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_true']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_true_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&raquo;" name="falsify" style="font-size:15px;"></p>
    </td>

    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_FALSE']->value;?>
</h3>
      <select class="categoryList" name="cat_false[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_false']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_false_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&laquo;" name="trueify" style="font-size:15px;"></p>
    </td>
  </tr>
</table>
<?php }
}
