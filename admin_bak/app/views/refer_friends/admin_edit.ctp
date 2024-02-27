<div class="form">
	<?php 
		echo $this->element('admin/content_header', array('contentTitle'=>'Refer A Friend Manager'));
		echo $this->Form->create('ReferFriend', array('action'=>'edit','inputDefaults'=>array('div'=>false,'label'=>false),'onsubmit'=>'return validate();'));
		if (isset ( $this->data['ReferFriend']['id']))
			echo $this->Form->hidden('ReferFriend.id');
		echo $this->element('admin/form_table', array('formTitle'=>'Edit Refer A Friend','formElement'=>'admin/admin_contact_form'));
		echo $this->Form->end(); 
	?>
</div>