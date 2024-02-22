<div class="form">
	<?php 
		echo $this->element('admin/content_header', array('contentTitle'=>'Event Manager'));
		echo $this->Form->create('Event', array('action'=>'admin_add','inputDefaults'=>array('div'=>false,'label'=>false),'onsubmit'=>'return validate();'));
		echo $this->element('admin/form_table', array('formTitle'=>'Add Eevnt','formElement'=>'admin/admin_event_form'));
		echo $this->Form->end(); 
	?>
</div>