<?php
class Blog extends AppModel {
	var $name = 'Blog';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'value required',
			),
		),
	);
	
}
?>