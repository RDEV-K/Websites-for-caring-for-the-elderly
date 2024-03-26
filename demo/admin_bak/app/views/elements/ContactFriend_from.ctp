<div class='control-group'>
	<label class="control-label" for="input01">	<?php __("First Name"); ?> </label>
	<div class="controls"><?php echo $this->Form->input('first_name' , array('class'=>'notEmpty'));?> </div>
</div>
<div class='control-group'>
	<label class="control-label" for="input01"> <?php __("Last Name"); ?> </label>
	<div class="controls"> <?php echo $this->Form->input('last_name' , array('class'=>'notEmpty'));?> </div>
</div>
<div class='control-group'>
	<label class="control-label" for="input01"> <?php __("Email"); ?> </label>
	<div class="controls">	<?php echo $this->Form->input('email',array('class'=>'notEmpty validEmail'));?></div>
</div>
<div class='control-group'>
	<label class="control-label" for="input01"> <?php __("Phone"); ?> </label>
	<div class="controls"> <?php echo $this->Form->input('phone_number',array('class'=>'numeric'));?> </div>
</div>
<div class='control-group'>
	<label class="control-label" for="input01"> <?php __("Message"); ?> </label>
	<div class="controls"> <?php echo $this->Form->input('message');?> </div>
</div>
<div class='control-group'>	
	<div class="controls">
		<label class="checkbox">
		<?php echo $this->Form->input('is_agree');?>
		<?php __("I want to receive newsletters,updates,and special offers"); ?>
		</label>
	</div>
</div>
