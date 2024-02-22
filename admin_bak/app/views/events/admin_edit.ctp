<div class="form">
	<?php 
		echo $this->element('admin/content_header', array('contentTitle'=>'Event Manager'));
		echo $this->Form->create('Event', array('action'=>'edit','inputDefaults'=>array('div'=>false,'label'=>false),'onsubmit'=>'return validate();'));
		if (isset ( $this->data['Event']['id']))
			echo $this->Form->hidden('Event.id');
		echo $this->element('admin/form_table', array('formTitle'=>'Edit Eevnt','formElement'=>'admin/admin_event_form'));
		echo $this->Form->end(); 
	?>
</div>