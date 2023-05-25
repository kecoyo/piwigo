<?php
/* Smarty version 4.1.0, created on 2023-05-24 23:07:23
  from '/www/piwigo/admin/themes/default/template/check_integrity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646e282b2d5ef2_23842450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57543e3e05f1dd1ad7423249885db1f99e381539' => 
    array (
      0 => '/www/piwigo/admin/themes/default/template/check_integrity.tpl',
      1 => 1684931538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646e282b2d5ef2_23842450 (Smarty_Internal_Template $_smarty_tpl) {
?><dl>
  <dt><?php echo l10n('Check integrity');?>
</dt>
  <dd>
    <ul>
      <form method="post" name="c13y" id="c13y" action="">
      <fieldset>
        <table class="table2">
          <tr class="throw">
            <th></th>
            <th><?php echo l10n('Anomaly');?>
</th>
            <th><?php echo l10n('Correction');?>
</th>
          </tr>
<?php if ((isset($_smarty_tpl->tpl_vars['c13y_list']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c13y_list']->value, 'c13y', false, NULL, 'c13y_loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['c13y']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c13y']->value) {
$_smarty_tpl->tpl_vars['c13y']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_c13y_loop']->value['index']++;
?>
              <tr class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_c13y_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_c13y_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>">
                <td>
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['can_select']) {?>
                    <input type="checkbox" name="c13y_selection[]" value="<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
" id="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"><label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"></label>
<?php }?>
                </td>
                <td><label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c13y']->value['anomaly'];?>
</label></td>
                <td>
                  <label for="c13y_selection-<?php echo $_smarty_tpl->tpl_vars['c13y']->value['id'];?>
">
<?php if ($_smarty_tpl->tpl_vars['c13y']->value['show_ignore_msg']) {?>
                      <?php echo l10n('The anomaly will be ignored until next application version');?>

                      <br>
                      <?php echo l10n('Correction the anomaly will cancel the fact that it\'s ignored');?>

<?php }
if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_fct']) {?>
                      <?php echo l10n('Automatic correction');?>

<?php }
if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_bad_fct']) {?>
                      <?php echo l10n('Impossible automatic correction');?>

<?php }
if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_success_fct']) {?>
                      <?php echo l10n('Correction applied with success');?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['c13y']->value['correction_error_fct'])) {?>
                      <?php echo l10n('Correction applied with error');?>

                      <br>
                      <?php echo $_smarty_tpl->tpl_vars['c13y']->value['c13y']['correction_error_fct'];?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['c13y']->value['correction_msg'])) {
if ($_smarty_tpl->tpl_vars['c13y']->value['show_correction_success_fct'] || !empty($_smarty_tpl->tpl_vars['c13y']->value['correction_error_fct']) || $_smarty_tpl->tpl_vars['c13y']->value['show_correction_fct'] || $_smarty_tpl->tpl_vars['c13y']->value['show_correction_bad_fct']) {?>
                        <br>
<?php }?>
                      <?php echo nl2br($_smarty_tpl->tpl_vars['c13y']->value['correction_msg']);?>

<?php }?>
                  </label>
                </td>
              </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
        </table>

        <p>
			
			<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function(){

				jQuery("#checkAllLink").click(function () {
					jQuery("#c13y input[type=checkbox]").attr('checked', true);
					return false;
				});

				jQuery("#uncheckAllLink").click(function () {
					jQuery("#c13y input[type=checkbox]").attr('checked', false);
					return false;
				});

			});
			function DeselectAll( formulaire )
			{
				var elts = formulaire.elements;
				for(var i=0; i <elts.length; i++)
				{
					if (elts[i].type=='checkbox')
						elts[i].checked = false;
				}
			}
			<?php echo '</script'; ?>
>
			
<?php if ($_smarty_tpl->tpl_vars['c13y_show_submit_ignore']->value) {?>
              <a href="#" id="checkAllLink"><?php echo l10n('Check all');?>
</a>
            / <a href="#" id="uncheckAllLink"><?php echo l10n('Uncheck all');?>
</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['c13y_do_check']->value))) {?>
            / <a href="#" onclick="DeselectAll(document.getElementById('c13y'));
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c13y_do_check']->value, 'ID');
$_smarty_tpl->tpl_vars['ID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value) {
$_smarty_tpl->tpl_vars['ID']->do_else = false;
?>
              document.getElementById('c13y_selection-<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
').checked = true;
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            return false;"><?php echo l10n('Check automatic corrections');?>
</a>
<?php }?>
        </p>

        <p>
<?php if ($_smarty_tpl->tpl_vars['c13y_show_submit_automatic_correction']->value) {?>
            <input class="submit" type="submit" value="<?php echo l10n('Apply selected corrections');?>
" name="Apply selected corrections">
<?php }
if ($_smarty_tpl->tpl_vars['c13y_show_submit_ignore']->value) {?>
            <input class="submit" type="submit" value="<?php echo l10n('Ignore selected anomalies');?>
" name="Ignore selected anomalies">
<?php }?>
          <input class="submit" type="submit" value="<?php echo l10n('Refresh');?>
" name="Refresh">
          </p>

      </fieldset>
      </form>
    </ul>
  </dd>
<?php }
}
