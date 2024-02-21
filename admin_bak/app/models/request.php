<?php
class Request extends AppModel {
	var $name = 'Request';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $validate = array(
		'date' => array(
			'rule' => 'date',
			'message' => 'Must be a valid date',
		),
		'first_name' => array(
			'rule' => 'notEmpty',
			'message' => 'This field is required',
		),
		'last_name' => array(
			'rule' => 'notEmpty',
			'message' => 'This field is required',
		),
		'email' => array(
			'valid' => array(
				'rule' => 'notEmpty',
				'message' => 'This field is required'
			),
			'uniqe'=>array(
				'rule'    => array('email', true),
				'message' => 'Please supply a valid email address.',
			)
		),
		'phone' => array(
			'valid'=>array(
				'rule' => 'notEmpty',
				'message' => 'This field is required'
			),
			'numeric'=>array(
				'rule' => 'numeric',
				'message' => 'Please enter the numeric value.'
			)
		),'time_of_tour' => array(
			'rule' => array('validTourTimeRange', 9, 16),
			'message' => 'Time must be between 9 am to 4 pm',
		),'resident_zipcode' => array(
			'rule' => 'numeric',
			'message' => 'Please enter the numeric value.'
		),'zipcode' => array(
			'rule' => 'numeric',
			'message' => 'Please enter the numeric value.'
		),
	);

	function validTourTimeRange($check, $start, $end) {
		$checkTime = strtotime($check['time_of_tour']);
		$startTime = strtotime("$start:00:00");
		$endTime = strtotime("$end:00:00");

		return ($checkTime >= $startTime && $checkTime <= $endTime);
	}
}