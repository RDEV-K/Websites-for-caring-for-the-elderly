<div class="form">
	<?php 
		echo $this->element('admin/content_header', array('contentTitle'=>'Blog Manager'));
		echo $this->Form->create('Blog', array('action'=>'admin_edit','inputDefaults'=>array('div'=>false,'label'=>false),'onsubmit'=>'return validate();'));
		echo $this->element('admin/form_table', array('formTitle'=>'Edit Blog','formElement'=>'admin/admin_blog_form'));
		echo $this->Form->end(); 
	?>
</div>
