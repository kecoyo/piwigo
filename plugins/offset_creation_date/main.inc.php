<?php
/*
Plugin Name: Offset Creation Date
Version: 1.1.0
Description: Offset the creation date of photos in the batch manager.
Plugin URI: https://fr.piwigo.org/ext/extension_view.php?eid=940
Author: Satirik
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

add_event_handler('loc_end_element_set_global', 'offset_creation_date');
add_event_handler('element_set_global_action', 'offset_creation_date_action', 50, 2);

function offset_creation_date()
{
  global $template;

  load_language('plugin.lang', dirname(__FILE__).'/');

  $template->set_filename('offset_creation_date', dirname(__FILE__).'/offset_creation_date.tpl');

  $creation_date_hours_offset = empty($_POST['creation_date_hours_offset']) ? '' : $_POST['creation_date_hours_offset'];
  $creation_date_minutes_offset = empty($_POST['creation_date_minutes_offset']) ? '' : $_POST['creation_date_minutes_offset'];
  
  $template->assign(array(
    'CREATION_DATE_HOURS_OFFSET'  => $creation_date_hours_offset,
    'CREATION_DATE_MINUTES_OFFSET'  => $creation_date_minutes_offset
	)
  );

  $template->append('element_set_global_plugins_actions', array(
    'ID' => 'creation_date_offset',
    'NAME' => l10n('Offset Creation Date'),
    'CONTENT' => $template->parse('offset_creation_date', true),
    )
  );
}

function offset_creation_date_action($action, $collection)
{
  if ($action == 'creation_date_offset')
  {
	if(!empty($_POST['creation_date_hours_offset']) || !empty($_POST['creation_date_minutes_offset']))
	{
		$query='SELECT id,date_creation FROM '.IMAGES_TABLE.' WHERE id IN ('.implode(',', $collection).')';
		$result = pwg_query($query);
		$datas = array();
		$date_creation_hours_offset = 0;
		$date_creation_hours_offset_str = $_POST['creation_date_hours_offset'];
		if(is_numeric($date_creation_hours_offset_str))
		{
			$date_creation_hours_offset = intval($date_creation_hours_offset_str);
		}
		$date_creation_minutes_offset = 0;
		$date_creation_minutes_offset_str = $_POST['creation_date_minutes_offset'];
		if(is_numeric($date_creation_minutes_offset_str))
		{
			$date_creation_minutes_offset = intval($date_creation_minutes_offset_str);
		}
		while ($row = pwg_db_fetch_assoc($result))
		{
			$newCreationDate = new DateTime($row['date_creation']);
			$strOffset = ($date_creation_hours_offset > 0 ? '+' : '').strval($date_creation_hours_offset).' hour';
			$newCreationDate->modify($strOffset);
			$strOffset = ($date_creation_minutes_offset > 0 ? '+' : '').strval($date_creation_minutes_offset).' minute';
			$newCreationDate->modify($strOffset);
			array_push(
				$datas,
				array(
					'id' => $row['id'],
					'date_creation' => $newCreationDate->format('Y-m-d H:i:s')
				)
			);
		}

		mass_updates(
			IMAGES_TABLE,
			array('primary' => array('id'), 'update' => array('date_creation')),
			$datas
		);

		pwg_activity('photo', $collection, 'edit', array('action'=>'date_creation'));
	}else{
		load_language('plugin.lang', dirname(__FILE__).'/');;
		$_SESSION['page_errors'] = array(l10n('Offset can\'t be empty'));
	}
  }
}

?>