<div class="form">
	<?php echo $this->element('admin/content_header', array('contentTitle'=>'Change Password')); ?>
	<?php echo $form->create('User', array('action'=>'change_password' ,'onsubmit'=>'return validate();'));?>
	<?php echo $this->element('admin/form_table', array('formTitle'=>'Change Password', 'formElement'=>'admin/change_password_form')); ?>
	<?php echo $form->end(); ?>
</div>