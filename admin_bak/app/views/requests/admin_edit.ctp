<div class="form">
	<?php 
		$minYear = date('Y') - 100;
		$maxYear = date('Y') + 10;

		echo $this->element('admin/content_header', array('contentTitle'=>'Request Manager'));
		echo $this->Form->create(
			'Request', 
			array(
				'action'=>'edit',
				'inputDefaults'=>array(
					'div'=>false,
					'label'=>false,
					'monthNames' => false,
					'minYear' => $minYear,
					'maxYear' => $maxYear,
					'dateFormat' => 'DMY',
					'twoDigitDay' => true,
				),
				'onsubmit'=>'return validate();'
			)
		);
		if (isset ( $this->data['Request']['id']))
			echo $this->Form->hidden('Request.id');
		echo $this->element('admin/form_table', array('formTitle'=>'Edit Requests','formElement'=>'admin/admin_request_form'));
		echo $this->Form->end(); 
		
	?>
</div>