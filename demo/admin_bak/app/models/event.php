<?php
class Event extends AppModel {
	var $name = 'Event';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
		'event_date' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
		'start_time' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
		'end_time' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
	);
	
}
?>