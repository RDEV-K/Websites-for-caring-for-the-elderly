<?php 
if($this->params['controller']=='photos'){
	$here = $this->base.'/admin/properties'; 
}else{
	$here = $this->base.'/admin/'.$this->params['controller']; 
}
?>
<script type='text/javascript'>
    function gotoIndex(){
        window.location.href = "<?php echo $here; ?>/index";
    }
    function gotoLogin(){
        window.location.href = "<?php echo $here; ?>/login";
    }
</script>

<?php
    echo $javascript->link('validation_rules', false);
   
?>

<table class="form_container">
	<tr class="header_row">
		<th colspan='2'><?php __($formTitle); ?></th>
	</tr>
	<tr>
		<td class="content_cell">
			<table class="form_table" width="100%">
				<?php
					echo $this->element($formElement);
				?>		
			</table>
		</td>
	</tr>
	<tr class="footer_row">
		<td>
			<?php
				if(!isset($saveAndContinue)){
					echo $form->submit(__('Save',true), array('class'=>'admin_button', 'div'=>false));
					echo " ";
					echo $form->button(__('Cancel',true), array('type'=>'button', 'class'=>'admin_button', 'onclick'=>'gotoIndex()'));
				} else {
					echo $this->element('admin/form_buttons');
				}
			?>
		</td>
	</tr>
</table>