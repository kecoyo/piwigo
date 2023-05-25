<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:03:05
  from '/www/wwwroot/piwigo/admin/themes/default/template/maintenance_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd5a91eef26_33081657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77833e5c324e952048c794427c8137db13ea1bf0' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/maintenance_actions.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd5a91eef26_33081657 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
const no_time_elapsed = "<?php echo l10n("right now");?>
";
const unit_MB = "<?php echo l10n("%s MB");?>
"
let selected = [];
$(".lock-gallery-button").each(function() {
  const gallery_tip = '<?php echo strtr(l10n("A locked gallery is only visible to administrators"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
<?php if (((isset($_smarty_tpl->tpl_vars['U_MAINT_LOCK_GALLERY']->value)))) {?>
    let title = '<?php echo l10n("Are you sure you want to lock the gallery?");?>
';
<?php } else { ?>
    let title = '<?php echo l10n("Are you sure you want to unlock the gallery?");?>
';
<?php }?>
  let confirm_msg_gallery = '<?php echo l10n("Yes, I want to lock the gallery");?>
';
  let cancel_msg_gallery = '<?php echo l10n("Keep it unlocked");?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg,
    alert_content: gallery_tip
  });
});
$(".purge-history-detail-button").each(function() {
  const title = '<?php echo strtr(l10n("Purge history detail"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
$(".purge-history-summary-button").each(function() {
  const title = '<?php echo strtr(l10n("Purge history summary"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
$(".purge-search-history-button").each(function() {
  const title = '<?php echo strtr(l10n("Purge search history"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
$(".delete-all-sizes-button").each(function() {
  const title = '<?php echo strtr(l10n("Are you sure you want to delete all sizes?"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});

$(".delete-size-check").click(function () {
  if ($(this).attr('data-selected') == '1') {
    $(this).attr('data-selected', '0');
    $(this).find("i").hide();
  } else {
    $(this).attr('data-selected', '1');
    $(this).find("i").show();
  }
  $(this).trigger("change");
});
$(".delete-size-check:first").change(function() {
  if ($(this).attr('data-selected') == '1') {
    $(".delete-size-check").hide();
    $(".delete-size-check").attr("data-selected", "1");
    $(this).show();
  } else {
    $(".delete-size-check").show();
    $(".delete-size-check").attr("data-selected", "0");
  }
})
const delete_deriv_URL = "admin.php?page=maintenance&action=derivatives&";
$(".delete-size-check").change(function() {
  let delete_deriv_with_token = delete_deriv_URL + "pwg_token=" + "<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
&";
  let types_str = '';
  let selected = []
  $(".delete-size-check").each(function () {
    if ($(this).attr("data-selected") == '1') {
      selected.push($(this).attr("name"));
    }
  })
  if (selected.length == 0) {
    $(".delete-sizes").attr("href", "");
  } else {
    if (selected[0] == "all") {
      types_str = "all";
    } else {
      types_str = selected.join("_");
    }
    console.log(selected);
    $(".delete-sizes").attr("href", delete_deriv_with_token + "type=" + types_str);
  }
})

$(".delete-sizes").hide();
$(".delete-size-check").click( function () {
  let displayDeleteSizes = false;
  $(".delete-size-check").each(function() {
    if ($(this).attr("data-selected") == 1) {
      displayDeleteSizes = true;
    }
  });

  (displayDeleteSizes ? $(".delete-sizes").show() : $(".delete-sizes").hide())

})

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'ajax','load'=>'footer','path'=>'admin/themes/default/js/maintenance.js'),$_smarty_tpl ) );?>


<?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value == 1) {?>

<fieldset class="">
  <legend><span class="icon-globe icon-blue"></span><?php echo l10n('Global Gallery Actions');?>
</legend>
  <div style="display:flex;flex-wrap: wrap;">
<?php if (((isset($_smarty_tpl->tpl_vars['U_MAINT_LOCK_GALLERY']->value)))) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_LOCK_GALLERY']->value;?>
" class="lock-gallery-button icon-lock maintenance-action"><?php echo l10n('Lock gallery');?>
</a>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_UNLOCK_GALLERY']->value;?>
" class="lock-gallery-button icon-lock maintenance-action"><?php echo l10n('Unlock gallery');?>
</a>
<?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_CATEGORIES']->value;?>
" class="icon-folder-open maintenance-action"><?php echo l10n('Update albums informations');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_IMAGES']->value;?>
" class="icon-info-circled-1 maintenance-action"><?php echo l10n('Update photos information');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_DATABASE']->value;?>
" class="icon-database maintenance-action"><?php echo l10n('Repair and optimize database');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_C13Y']->value;?>
" class="icon-ok maintenance-action"><?php echo l10n('Reinitialize check integrity');?>
</a>
  </div>
</fieldset>
<fieldset class="">
  <legend><span class="icon-trash-1 icon-green"></span><?php echo l10n('Purge Actions');?>
</legend>
  <div style="display:flex;flex-wrap: wrap;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_USER_CACHE']->value;?>
" class="icon-user-1 maintenance-action"><?php echo l10n('Purge user cache');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_ORPHAN_TAGS']->value;?>
" class="icon-tags maintenance-action"><?php echo l10n('Delete orphan tags');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_HISTORY_DETAIL']->value;?>
" class="icon-back-in-time maintenance-action purge-history-detail-button"><?php echo l10n('Purge history detail');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_HISTORY_SUMMARY']->value;?>
" class="icon-back-in-time maintenance-action purge-history-summary-button"><?php echo l10n('Purge history summary');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_SESSIONS']->value;?>
" class="icon-th-list maintenance-action"><?php echo l10n('Purge sessions');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_FEEDS']->value;?>
" class="icon-bell maintenance-action"><?php echo l10n('Purge never used notification feeds');?>
</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_SEARCH']->value;?>
" class="icon-search maintenance-action purge-search-history-button"><?php echo l10n('Purge search history');?>
</a>
  </div>
</fieldset>

<?php if ((isset($_smarty_tpl->tpl_vars['advanced_features']->value)) && !(count($_smarty_tpl->tpl_vars['advanced_features']->value) < 1)) {?>
  <fieldset class="">
  <legend><span class="icon-puzzle icon-purple"></span><?php echo l10n('Advanced features');?>
</legend>
  <div style="display:flex;flex-wrap: wrap;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_features']->value, 'feature', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['feature']->value['URL'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['feature']->value['ICON'];?>
 maintenance-action"><?php echo $_smarty_tpl->tpl_vars['feature']->value['CAPTION'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</fieldset>
<?php }?>

<fieldset class="">
  <legend><span class="icon-trash-1 icon-red"></span><?php echo l10n('Purge Cache');?>
</legend>

  <div class="template-purge">
    <div class="cache-infos">
        <span class="cache-size-text"><?php echo l10n('Cache size');?>
</span>
        <span class="cache-size-value">
<?php if ((isset($_smarty_tpl->tpl_vars['cache_sizes']->value))) {?>
          <?php ob_start();
echo round($_smarty_tpl->tpl_vars['cache_sizes']->value[0]['value']/1024/1024,2);
$_prefixVariable1 = ob_get_clean();
echo l10n("%s MB",$_prefixVariable1);?>

<?php } else { ?>
          <?php echo l10n('N/A');?>

<?php }?>
        </span>
        <span class="cache-lastCalculated-text"><?php if ($_smarty_tpl->tpl_vars['time_elapsed_since_last_calc']->value) {?>&ThickSpace;<?php echo l10n('calculated');
}?></span>
        <span class="cache-lastCalculated-value"><?php if ($_smarty_tpl->tpl_vars['time_elapsed_since_last_calc']->value) {?> <?php echo $_smarty_tpl->tpl_vars['time_elapsed_since_last_calc']->value;?>
 <?php } else { ?> &ThickSpace;<?php echo l10n("never calculated");?>
 <?php }?></span>
        <a class="refresh-cache-size"><span class="refresh-icon icon-arrows-cw"></span><?php echo l10n('Refresh');?>
</a>
    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINT_COMPILED_TEMPLATES']->value;?>
" class="icon-file-code maintenance-action"><?php echo l10n('Purge compiled templates');?>
 
      <span class="multiple-compiledTemplate-sizes">
<?php if ((isset($_smarty_tpl->tpl_vars['cache_sizes']->value))) {?>
        <?php ob_start();
echo round($_smarty_tpl->tpl_vars['cache_sizes']->value[2]['value']/1024/1024,2);
$_prefixVariable2 = ob_get_clean();
echo l10n("%s MB",$_prefixVariable2);?>
  
<?php } else { ?>
        <?php echo l10n('N/A');?>

<?php }?>
      </span>
    </a>
  </div>

  <div class="delete-size-checks">
    <span id="label-delete-size-checkbox"><?php echo l10n('Delete multiple size images');?>

      <span class="multiple-pictures-sizes">
<?php if ((isset($_smarty_tpl->tpl_vars['cache_sizes']->value))) {?>
        <?php ob_start();
echo round($_smarty_tpl->tpl_vars['cache_sizes']->value[1]['value']['all']/1024/1024,2);
$_prefixVariable3 = ob_get_clean();
echo l10n("%s MB",$_prefixVariable3);?>

<?php } else { ?>
        <?php echo l10n('N/A');?>

<?php }?>
      </span>
    </span>
    <div class="delete-check-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purge_derivatives']->value, 'url', false, 'name', 'loop', array (
));
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
      <div class="delete-size-check" title="<?php if ((isset($_smarty_tpl->tpl_vars['cache_sizes']->value))) {
ob_start();
echo round($_smarty_tpl->tpl_vars['cache_sizes']->value[1]['value'][$_smarty_tpl->tpl_vars['url']->value]/1024/1024,2);
$_prefixVariable4 = ob_get_clean();
echo l10n("%s MB",$_prefixVariable4);
} else {
echo l10n('N/A');
}?>" data-selected="0" name="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
          <span class="select-checkbox"><i class="icon-ok" style="margin-left:8px"></i></span>
          <span class="picture-deletion-size" style="font-size:14px;margin-left:5px;padding-top:2px;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
      </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>

  <a class="icon-ok delete-sizes"><?php echo l10n('Delete these sizes');?>
</a>
</fieldset>

<?php }?>
<style>
#label-delete-size-checkbox {
  font-weight: bold;
  white-space: nowrap;
}

.maintenance-action:hover {
  color: #ff7700;
  text-decoration: none;
}

.maintenance-action {
  border: solid 1px;
  padding: 8px 10px;
  margin-right: 20px;
  margin-bottom: 20px;
}
.maintenance-action.icon-th-list {
  font-size: 13px;
}

.delete-size-checks {
  display: flex;
  text-align: left;
  margin-bottom: 5px;

  flex-direction: column;
}

.delete-check-container {
  display: flex;
  flex-wrap: wrap;
  margin-top: 15px;
}

.delete-size-check {
  margin-right: 15px;
  margin-bottom: 10px;
  display: flex;
  cursor: pointer
}

.select-checkbox {
  display: inline-block;
}

.delete-sizes {
  display: block;
  width: max-content;
  text-align: left;
}

.delete-sizes {
  cursor: pointer;
  padding: 8px 10px;
  font-weight: bold;
  background-color: #ffa744;
  color: #3c3c3c;
}

.delete-sizes:hover {
  background-color: #ff7700;
  color: #3c3c3c;
  text-decoration: none;
}

.rotate-anim {
  animation: spin 4s linear infinite;
}

@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style><?php }
}
