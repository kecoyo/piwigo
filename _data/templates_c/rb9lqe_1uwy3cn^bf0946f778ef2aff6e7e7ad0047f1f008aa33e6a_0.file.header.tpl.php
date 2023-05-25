<?php
/* Smarty version 4.1.0, created on 2023-05-24 13:41:48
  from '/www/wwwroot/piwigo/themes/smartpocket/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646da39cb6a0f7_76609433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0946f778ef2aff6e7e7ad0047f1f008aa33e6a' => 
    array (
      0 => '/www/wwwroot/piwigo/themes/smartpocket/template/header.tpl',
      1 => 1684853472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646da39cb6a0f7_76609433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/piwigo/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<meta name="generator" content="Piwigo (aka PWG), see piwigo.org">
<?php if ((isset($_smarty_tpl->tpl_vars['meta_ref']->value))) {?> 
<?php if ((isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value))) {?>
<meta name="author" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['related_tags']->value))) {?>
<meta name="keywords" content="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_tags']->value, 'tag', false, NULL, 'tag_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
<?php }
if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
<meta name="description" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php } else { ?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php }
}?>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<?php if (((isset($_smarty_tpl->tpl_vars['REVERSE']->value)) && $_smarty_tpl->tpl_vars['REVERSE']->value && $_smarty_tpl->tpl_vars['PAGE_TITLE']->value == l10n('Home'))) {?>
<title><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title><?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</title><?php }?>
<link rel="start" title="<?php echo l10n('Home');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" >

<!-- COMBINED_CSS -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl ) );?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value))) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'header'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'config','path'=>'themes/smartpocket/js/config.js','require'=>'jquery'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.mobile','path'=>'themes/smartpocket/js/jquery.mobile.min.js','require'=>'jquery,config'),$_smarty_tpl ) );?>


</head>

<body>
<div data-role="page" data-theme="a">
<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?><div data-role="panel" id="menubar" data-position="right" data-display="overlay">
  <?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>

</div><?php }?>
<div data-role="header">
  <div class="title">
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" class="home_button" data-icon="home" data-iconpos="notext" data-role="button"></a>
    <?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>

    <a href="#menubar" data-icon="grid" data-iconpos="notext" data-role="button" style="float: right" >Menu</a>
  </div>
</div>

<?php }
}
