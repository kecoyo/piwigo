<?php
/* Smarty version 4.1.0, created on 2023-05-23 23:02:12
  from '/www/wwwroot/piwigo/admin/themes/default/template/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646cd574080166_08779848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c44c446a7aeee4833345a27b42dc9d33062c90b' => 
    array (
      0 => '/www/wwwroot/piwigo/admin/themes/default/template/tags.tpl',
      1 => 1684853485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646cd574080166_08779848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'tagContent' => 
  array (
    'compiled_filepath' => '/www/wwwroot/piwigo/_data/templates_c/p6jhns^5c44c446a7aeee4833345a27b42dc9d33062c90b_0.file.tags.tpl.php',
    'uid' => '5c44c446a7aeee4833345a27b42dc9d33062c90b',
    'call_name' => 'smarty_template_function_tagContent_2140458200646cd5740164e7_26923239',
  ),
));
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var pwg_token = "<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
";
var orphan_tag_names = <?php echo $_smarty_tpl->tpl_vars['orphan_tag_names_array']->value;?>
;
var str_delete = '<?php echo l10n('Delete tag "%s"?');?>
';
var str_delete_tags = '<?php echo l10n('Delete tags \{%s\}?');?>
';
var str_yes_delete_confirmation = "<?php echo l10n('Yes, delete');?>
";
var str_no_delete_confirmation = "<?php echo l10n("No, I have changed my mind");?>
";
var str_yes_rename_confirmation = "<?php echo l10n('Yes, rename');?>
";
var str_tag_deleted = '<?php echo l10n('Tag "%s" succesfully deleted');?>
';
var str_tags_deleted = '<?php echo l10n('Tags \{%s\} succesfully deleted');?>
';
var str_already_exist = '<?php echo l10n('Tag "%s" already exists');?>
';
var str_tag_created = '<?php echo l10n('Tag "%s" created');?>
';
var str_tag_renamed = '<?php echo l10n('Tag "%s1" renamed in "%s2"');?>
';
var str_tag_rename = '<?php echo l10n('Rename "%s"');?>
';
var str_delete_orphan_tags = '<?php echo l10n('Delete orphan tags ?');?>
';
var str_orphan_tags = '<?php echo l10n('You have %s1 orphan : %s2');?>
';
var str_delete_them = '<?php echo l10n('Delete them');?>
';
var str_keep_them = '<?php echo l10n('Keep them');?>
';
var str_copy = '<?php echo l10n(' (copy)');?>
';
var str_other_copy = '<?php echo l10n(' (copy %s)');?>
';
var str_merged_into = '<?php echo l10n('Tag(s) \{%s1\} succesfully merged into "%s2"');?>
';
var str_and_others_tags = '<?php echo l10n('and %s others');?>
';
var str_others_tags_available = '<?php echo l10n('%s other tags available...');?>
'
var str_number_photos = '<?php echo '%d photos';?>
'
var str_no_photos = '<?php echo 'no photo';?>
'
var str_select_all_tag = '<?php echo l10n('Select all %d tags');?>
';
var str_clear_selection = '<?php echo l10n('Clear Selection');?>
';
var str_selection_done = '<?php echo l10n('The %d tags on this page are selected');?>
';
var str_tag_selected = '<?php echo l10n('<b>%d</b> tag selected');?>
';
var str_tags_found = '<?php echo l10n('<b>%d</b> tags found');?>
';
var str_tag_found = '<?php echo l10n('<b>%d</b> tag found');?>
';

$(document).ready(function() {
  $("h1").append('<span class="badge-number"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>');
});

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'tiptip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'tags','load'=>'footer','path'=>'admin/themes/default/js/tags.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cookie','path'=>'themes/default/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>


<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
if (!$.cookie("pwg_tags_per_page")) {
  $.cookie("pwg_tags_per_page", "100");
}
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>



<div class="selection-mode-group-manager">
  <label class="switch">
    <input type="checkbox" id="toggleSelectionMode">
    <span class="slider round"></span>
  </label>
  <p><?php echo l10n('Selection mode');?>
</p>
</div>

<div id="selection-mode-block" class="in-selection-mode tag-selection">
  <div class="tag-selection-content">

    <p id="nothing-selected"><?php echo l10n('No tags selected, no actions possible.');?>
</p>

    <div class="selection-mode-tag">
      <p><?php echo l10n('Your selection');?>
</p>
      <div class="tag-list" data-list='[]'>
        
      </div>
      <div class="selection-other-tags"></div>
      <button id="MergeSelectionMode" class="icon-object-group unavailable" title="<?php echo l10n('At least 2 selected tags are needed to merge');?>
"><?php echo l10n('Merge');?>
</button>
      <button id="DeleteSelectionMode" class="icon-trash-1"><?php echo l10n('Delete');?>
</button>
    </div>

    <div id="MergeOptionsBlock">
      <p><?php echo l10n('Choose which tag to merge these tags into');?>
</p>
      <p class="ItalicTextInfo"><?php echo l10n('The other tags will be removed');?>
</p>
      <div class="MergeOptionsContainer">
        <select id="MergeOptionsChoices"> 
        </select>
      </div>
      <button class="icon-ok ConfirmMergeButton">Confirm merge</button>
      <a id="CancelMerge">Cancel</a>
    </div>

  </div>
</div>

<div class='tag-header'>
  <div id='search-tag'>
    <div class='search-info'> </div>
    <span class='icon-search search-icon'> </span>
    <span class="icon-cancel search-cancel"></span>
    <input class='search-input' type='text' placeholder='<?php echo l10n('Search');?>
'>
  </div>
  <form id='add-tag' class='not-in-selection-mode'>
    <span class='icon-cancel-circled'></span>
    <label class='add-tag-label icon-plus-circled <?php if ($_smarty_tpl->tpl_vars['total']->value == 0) {?> head-button-1 <?php } else { ?> head-button-2 <?php }?>'>
      <p><?php echo l10n('Add a tag');?>
</p>
      <div class='add-tag-container'>
        <input type='text' id='add-tag-input' placeholder="<?php echo l10n('New tag');?>
">
        <input type='submit' hidden>
        <span class='icon-plus icon-validate'></span>
      </div>
    </label>
  </form>
  <div class='selection-controller in-selection-mode'>
    <p><?php echo l10n('Select');?>
</p>
    <a id="selectAll"><?php echo l10n('All');?>
</a>
    <a id="selectNone"><?php echo l10n('None');?>
</a>
    <a id="selectInvert"><?php echo l10n('Invert');?>
</a> 
  </div>
<?php if ($_smarty_tpl->tpl_vars['warning_tags']->value != '') {?>
  <div class='tag-warning tag-info icon-attention not-in-selection-mode'><p> <?php echo $_smarty_tpl->tpl_vars['warning_tags']->value;?>
 </p></div>
<?php }?>
  <div class='tag-message tag-info icon-ok not-in-selection-mode' <?php if ($_smarty_tpl->tpl_vars['message_tags']->value != '') {?>style='display:flex'<?php }?>> <p> <?php echo $_smarty_tpl->tpl_vars['message_tags']->value;?>
 </p> </div>
  <div class='tag-error tag-info icon-cancel not-in-selection-mode'> <p> </p> </div>
</div>
<div class="pageLoad">
  <i class='icon-spin6 animate-spin'> </i>
</div>

<div class="tag-select-message">
  <div></div> <a></a>
</div>

<div id="RenameTag" class="RenameTagPopIn">
  <div class="RenameTagPopInContainer">
    <a class="icon-cancel ClosePopIn"></a>
    
    <div class="AddIconContainer">
      <span class="AddIcon icon-blue icon-tags"></span>
    </div>
    <div class="AddIconTitle">
      <span><?php echo l10n('Rename "%s"');?>
</span>
    </div>
    <div class="RenameTagInputContainer">
      <label class="tag-property-label TagRenameLabelUsername"><?php echo l10n('Tag name');?>

        <input type="text" class="tag-property-input"/> 
      </label>
    </div>

    <div class="TagErrors icon-cancel">
    </div>

    <div class="TagSubmitOptions">
      <div class="TagSubmit">
        <span><?php echo l10n('Rename Tag');?>
</span>
      </div>

      <div class="TagLoading">
        <i class='icon-spin6 animate-spin'></i>
      </div>

      <div class="TagCancel">
        <span><?php echo l10n('Cancel');?>
</span>
      </div>
    </div>
  </div>
</div>

<div class='tag-container' data-tags='<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8', true);?>
' data-per_page=<?php echo $_smarty_tpl->tpl_vars['per_page']->value;?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first_tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
  <div class='tag-box' data-id='<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
' data-selected='0'>
<?php if ((isset($_smarty_tpl->tpl_vars['tag']->value['counter']))) {?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'tagContent', array('tag_name'=>$_smarty_tpl->tpl_vars['tag']->value['name'],'tag_U_VIEW'=>sprintf('index.php?/tags/%s-%s',$_smarty_tpl->tpl_vars['tag']->value['id'],$_smarty_tpl->tpl_vars['tag']->value['url_name']),'tag_U_EDIT'=>sprintf('admin.php?page=batch_manager&amp;filter=tag-%s',$_smarty_tpl->tpl_vars['tag']->value['id']),'has_image'=>($_smarty_tpl->tpl_vars['tag']->value['counter'] > 0),'tag_count'=>$_smarty_tpl->tpl_vars['tag']->value['counter']), true);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'tagContent', array('tag_name'=>$_smarty_tpl->tpl_vars['tag']->value['name'],'tag_U_VIEW'=>sprintf('index.php?/tags/%s-%s',$_smarty_tpl->tpl_vars['tag']->value['id'],$_smarty_tpl->tpl_vars['tag']->value['url_name']),'tag_U_EDIT'=>sprintf('admin.php?page=batch_manager&amp;filter=tag-%s',$_smarty_tpl->tpl_vars['tag']->value['id']),'has_image'=>false,'tag_count'=>0), true);?>

<?php }?>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="emptyResearch"> <?php echo l10n('No tag found');?>
 </div>
<div class="tag-pagination">
  <div class="pagination-per-page">
    <span class="thumbnailsActionsShow" style="font-weight: bold;"><?php echo l10n('Display');?>
</span>
    <a id="100"
<?php if (!(isset($_COOKIE['pwg_tags_per_page'])) || !$_COOKIE['pwg_tags_per_page'] || $_COOKIE['pwg_tags_per_page'] == 100) {?>
    class="selected"
<?php }?>
    >100</a>
    <a id="200"
<?php if ((isset($_COOKIE['pwg_tags_per_page'])) && $_COOKIE['pwg_tags_per_page'] == 200) {?>
    class="selected"
<?php }?>
    >200</a>
    <a id="500"
<?php if ((isset($_COOKIE['pwg_tags_per_page'])) && $_COOKIE['pwg_tags_per_page'] == 500) {?>
    class="selected"
<?php }?>
    >500</a>
    <a id="1000"
<?php if ((isset($_COOKIE['pwg_tags_per_page'])) && $_COOKIE['pwg_tags_per_page'] == 1000) {?>
    class="selected"
<?php }?>
    >1000</a>
  </div>

  <div class="pagination-container">
    <div class="pagination-arrow left">
      <span class="icon-left-open"></span>
    </div>
    <div class="pagination-item-container">
    </div>
    <div class="pagination-arrow rigth">
      <span class="icon-left-open"></span>
    </div>
  </div>
</div>

<div class='tag-template' style='display:none'>
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'tagContent', array('tag_name'=>'%name%','tag_U_VIEW'=>'%U_VIEW%','tag_U_EDIT'=>'%U_EDIT%','has_image'=>false,'tag_count'=>'%count%'), true);?>

</div> <?php }
/* smarty_template_function_tagContent_2140458200646cd5740164e7_26923239 */
if (!function_exists('smarty_template_function_tagContent_2140458200646cd5740164e7_26923239')) {
function smarty_template_function_tagContent_2140458200646cd5740164e7_26923239(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <p class='tag-name'><?php echo $_smarty_tpl->tpl_vars['tag_name']->value;?>
</p>
    <a class="icon-ellipsis-vert showOptions"></a>
    <div class="tag-dropdown-block dropdown">
      <div class="dropdown-content">
        <div class='tag-dropdown-header'>
          <b><?php echo $_smarty_tpl->tpl_vars['tag_name']->value;?>
</b>
          <i><?php if (!$_smarty_tpl->tpl_vars['has_image']->value) {
echo l10n('no photo');
} else {
echo l10n('%d photos',$_smarty_tpl->tpl_vars['tag_count']->value);
}?></i>
        </div>
        <a class='dropdown-option icon-eye view' href="<?php echo $_smarty_tpl->tpl_vars['tag_U_VIEW']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['has_image']->value) {?> style='display:none' <?php }?>> <?php echo l10n('View in gallery');?>
</a>
        <a class='dropdown-option icon-picture manage' href="<?php echo $_smarty_tpl->tpl_vars['tag_U_EDIT']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['has_image']->value) {?> style='display:none' <?php }?>> <?php echo l10n('Manage photos');?>
</a>
        <a class='dropdown-option icon-pencil edit'> <?php echo l10n('Edit');?>
</a>
        <a class='dropdown-option icon-docs duplicate'> <?php echo l10n('Duplicate');?>
</a>
        <a class='dropdown-option icon-trash delete'> <?php echo l10n('Delete');?>
</a>
      </div>
    </div>
    <span class="select-checkbox">
      <i class="icon-ok"> </i>
    </span>
<?php
}}
/*/ smarty_template_function_tagContent_2140458200646cd5740164e7_26923239 */
/* smarty_template_function_tagContent_2140458200646cd5740164e7_26923239 */
if (!function_exists('smarty_template_function_tagContent_2140458200646cd5740164e7_26923239')) {
function smarty_template_function_tagContent_2140458200646cd5740164e7_26923239(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>


<?php
}}
/*/ smarty_template_function_tagContent_2140458200646cd5740164e7_26923239 */
}
