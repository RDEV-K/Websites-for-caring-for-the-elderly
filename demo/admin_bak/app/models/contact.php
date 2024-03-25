<?php
class Contact extends AppModel {
	var $name = 'Contact';
	var $validate = array(
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
		'email' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
	);
	
}
?>