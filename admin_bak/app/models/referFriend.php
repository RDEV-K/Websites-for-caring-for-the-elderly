<?php
class ReferFriend extends AppModel {
	var $name = 'ReferFriend';
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
		),'phone' => array(
				'rule' => 'numeric',
				'message' => 'Please enter the numeric value.'
		)
	);
	
}
?>