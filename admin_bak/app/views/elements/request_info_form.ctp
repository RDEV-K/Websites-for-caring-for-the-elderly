<?php 
	$minYear = date('Y') - 100;
	$maxYear = date('Y') + 10;

	echo $this->Form->create(
		'Request',
		array(
			'controller'=>'requests',
			'class'=>'RequestAddForm form-horizontal',
			'inputDefaults'=>array(
				'div' => false,
				'label' => false,
				'monthNames' => false,
				'minYear' => $minYear,
				'maxYear' => $maxYear,
				'dateFormat' => 'DMY',
				'twoDigitDay' => true,
			),
			'action'=>'add',
			'type'=>'POST',
			'onsubmit'=>'return validate(".RequestAddForm")',
		)
	);
?>

<hr>
<h4>General Information</h4>
<hr>

<div class='control-group'>
	<label class="control-label">Date</label>
	<div class="controls"><?php echo $this->Form->input('date', array('class' => 'span1')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">First Name</label>
	<div class="controls"><?php echo $this->Form->input('first_name',array('class'=>'notEmpty')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Last Name</label>
	<div class="controls"><?php echo $this->Form->input('last_name',array('class'=>'notEmpty')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Email</label>
	<div class="controls"><?php echo $this->Form->input('email',array('class'=>'notEmpty validEmail')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Phone</label>
	<div class="controls"><?php echo $this->Form->input('phone',array('class'=>'notEmpty numeric')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Relation To Resident</label>
	<div class="controls"><?php echo $this->Form->input('relation_to_resident',array('class'=>'notEmpty')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Address</label>
	<div class="controls"><?php echo $this->Form->input('address',array('class'=>'notEmpty span5')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">City</label>
	<div class="controls"><?php echo $this->Form->input('city',array('class'=>'notEmpty')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">State</label>
	<div class="controls"><?php echo $this->Form->input('state',array('class'=>'notEmpty')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Zipcode</label>
	<div class="controls"><?php echo $this->Form->input('zipcode'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Tour Date</label>
	<div class="controls"><?php echo $this->Form->input('tour_date', array('class' => 'span1')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Time of Tour</label>
	<div class="controls"><?php echo $this->Form->input('time_of_tour', array('class' => 'span1')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Request Response</label>
	<div class="controls">
		<label class="checkbox">
			<?php echo $this->Form->input('call_back'); ?>
			Call Back
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('confirm_tour_schedule'); ?>
			Confirm tour schedule
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('mail_information'); ?>
			Mail information
		</label>
	</div>
</div>

<hr>
<h4>Resident Information</h4>
<hr>

<div class="control-group">
	<label class="control-label">Name</label>
	<div class="controls"><?php echo $this->Form->input('resident_name'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Date of Birth</label>
	<div class="controls"><?php echo $this->Form->input('resident_date_of_birth',array('class'=>'notEmpty span1')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Age</label>
	<div class="controls"><?php echo $this->Form->input('resident_age'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Address</label>
	<div class="controls"><?php echo $this->Form->input('resident_address', array('class' => 'span5')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">City</label>
	<div class="controls"><?php echo $this->Form->input('resident_city'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">State</label>
	<div class="controls"><?php echo $this->Form->input('resident_state'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Zipcode</label>
	<div class="controls"><?php echo $this->Form->input('resident_zipcode'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Phone</label>
	<div class="controls"><?php echo $this->Form->input('resident_phone'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Monthly Income</label>
	<div class="controls"><?php echo $this->Form->input('monthly_income'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Veteran</label>
	<div class="controls"><?php echo $this->Form->input('veteran'); ?></div>
</div>

<div class="control-group">
	<label class="control-label">Resident Lives</label>
	<div class="controls">
		<?php echo $this->Form->input('resident_lives', array('type' => 'select', 'options' => $residentLivesOptions, 'empty' => __('-Select-', true))); ?>
	</div>
</div>

<div class="control-group">
	<label class="control-label">Resident Has</label>
	<div class="controls">
		<?php echo $this->Form->input('resident_has', array('type' => 'select', 'options' => $residentHasOptions, 'empty' => __('-Select-', true))); ?>
	</div>
</div>

<div class="control-group">
	<label class="control-label">Needs assistance with</label>
	<div class="controls">
		<label class="checkbox">
			<?php echo $this->Form->input('medication'); ?>
			Medication
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('bathing'); ?>
			Bathing
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('meals'); ?>
			Meals
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('transefering'); ?> 
			Transferring
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('continent'); ?>
			Continent
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('incontinent'); ?>
			Incontinent
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('transefering'); ?>
			Transferring
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('walker'); ?>
			Walker
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('cane'); ?>
			Cane
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('wheel_chair'); ?>
			Wheel Chair
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('dressing'); ?>
			Dressing
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('diabetic'); ?>
			Diabetic
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('insulin_dependent'); ?>
			Insulin Dependent
		</label>
	</div>
</div>

<div class="control-group">
	<label class="control-label">General Health Info</label>
	<div class="controls"><?php echo $this->Form->input('genral_health_info', array('class' => 'span5')); ?></div>
</div>

<div class="control-group">
	<label class="control-label">How did you hear about us</label>
	<div class="controls">
		<label class="checkbox">
			<?php echo $this->Form->input('internet_search'); ?>
			Internet Search
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('friend'); ?>
			Friend
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('print'); ?>
			Print
		</label>
		<label class="checkbox">
			<?php echo $this->Form->input('other'); ?>
			Other
		</label>
	</div>
</div>

<div class="control-group">
	<div class="controls">
		<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
	</div>
</div>
<?php echo $this->Form->end();?>