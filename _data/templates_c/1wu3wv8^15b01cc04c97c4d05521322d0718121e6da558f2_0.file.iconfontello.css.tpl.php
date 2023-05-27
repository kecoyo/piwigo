<?php
/* Smarty version 4.1.0, created on 2023-05-27 15:45:44
  from '/www/piwigo/themes/modus/css/iconfontello.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6471b5285d03c4_59503523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b01cc04c97c4d05521322d0718121e6da558f2' => 
    array (
      0 => '/www/piwigo/themes/modus/css/iconfontello.css.tpl',
      1 => 1684931566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6471b5285d03c4_59503523 (Smarty_Internal_Template $_smarty_tpl) {
?>@import "fontello/css/modus.css";

A:hover .pwg-icon:before{
	text-decoration: none !important; /* IE 8,9*/
}

.pwg-icon {
<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['language_switch'])) || (isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader']))) {?>
	display: inline-block;
<?php }?>
	font-size: 24px
}


.pwg-button-text{
	display:none;
}

.pwg-state-disabled .pwg-icon {
	opacity: .5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	filter: alpha(opacity=50);
}

.pwg-button {
	display: inline-block;
	vertical-align: top;
	cursor:pointer;
}

.pwg-icon-slideshow:before { content: '\25b6';}
.pwg-icon-favorite-del:before { content: '\2661\2d'; letter-spacing: -2px}

<?php if ($_smarty_tpl->tpl_vars['conf']->value['index_posted_date_icon']) {
if ($_smarty_tpl->tpl_vars['conf']->value['index_created_date_icon']) {?>
.pwg-icon-calendar:before { content: '\f133'; }
.pwg-icon-camera-calendar:before { content: '\e70f'; }
<?php } else { ?>
.pwg-icon-calendar:before { content: '\f133'; }
<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader']))) {?>
.batch-downloader-icon {
	width: 26px
}
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['UserCollections']))) {?>
.user-collections-icon, .user-collections-share-icon, .user-collections-clear-icon, .user-collections-delete-icon, .user-collections-mail-icon {
	display: inline-block;
	height: 26px;
	width: 26px;
}
<?php }
}
}
