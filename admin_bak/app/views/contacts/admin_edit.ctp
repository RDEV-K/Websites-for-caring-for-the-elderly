<div class="form">
	<?php 
		echo $this->element('admin/content_header', array('contentTitle'=>'Contact Manager'));
		echo $this->Form->create('Contact', array('action'=>'edit','inputDefaults'=>array('div'=>false,'label'=>false),'onsubmit'=>'return validate();'));
		if (isset ( $this->data['Contact']['id']))
			echo $this->Form->hidden('Contact.id');
		echo $this->element('admin/form_table', array('formTitle'=>'Edit Contacts','formElement'=>'admin/admin_contact_form'));
		echo $this->Form->end(); 
	?>
</div>