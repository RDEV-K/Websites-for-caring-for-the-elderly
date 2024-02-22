<?php

# Display When Required Save and Continue to next Tab.
?>
<script type="text/javascript">
	$(function(){
		$(".saveAndContinue").click(function(){
			$("#saveAndContinue").val(1);
		})
	});
</script>
<?php 
	echo $this->Form->hidden('next',array('id'=>'saveAndContinue','value'=>''));
	echo $form->submit(__('Save',true), array('class'=>'admin_button', 'div'=>false));
	echo " ";  
	echo $form->button(__('Save & Continue',true), array('class'=>'admin_button saveAndContinue'));
	echo " ";
	echo $form->button(__('Cancel',true), array('class'=>'admin_button','type'=>'button', 'onclick'=>'gotoIndex();'));  
	 
?> 
