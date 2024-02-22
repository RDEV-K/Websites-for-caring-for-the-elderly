<tr style="border:0px">
	<td class="content_cell" style="border:0px">
		<table class="form_table" width="100%">
			<tr>
				<th colspan='4' class='header_row2'>User Details</th>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Date"); ?>
				</td>
				<td class='control request'>
					<?php echo $this->Form->input('date',array());?>
				</td>
				<td class='label'>
					 <?php __("First Name"); ?> <span class='required_fields'>*</span>
				</td>
				<td class='control'>
					<?php echo $this->Form->input('first_name' , array('class'=>'notEmpty'));?>
				</td>
			</tr>
			<tr>
				 <td class='label'>
					 <?php __("Last Name "); ?> <span class='required_fields'>*</span>
				</td>
				<td class='control'>
					<?php echo $this->Form->input('last_name' , array('class'=>'notEmpty'));?>
				</td>
				<td class='label'>
					 <?php __("Phone"); ?> <span class='required_fields'>*</span>
				</td>
				<td class='control'>
					<?php echo $this->Form->input('phone' , array('class'=>'notEmpty numeric'));?>
				</td>
			</tr>

			<tr>
				<td class='label'>
					 <?php __("Email"); ?><span class='required_fields'>*</span>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('email');?>
				</td>
				<td class='label'>
					 <?php __("Relation To Resident"); ?> 
				</td>
				<td class='control'>
					<?php echo $this->Form->input('relation_to_resident');?>
				</td>
			</tr>

			<tr>
				<td class='label'>
					 <?php __("Address"); ?>
				</td>
				<td class='control'>
					<?php echo $this->Form->input('address');?>
				</td>
				<td class='label'>
					 <?php __("City"); ?>
				</td>
				<td>
						<?php echo $this->Form->input('city');?>
				</td>
			</tr>

			<tr>
				<td class='label'>
					 <?php __("State"); ?>
				</td>
				<td class='control'>
					<?php
					   echo $this->Form->input('state');
					?>
				</td>
				 <td class='label'>
					 <?php __("Tour Date"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('tour_date');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Time Of Tour"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('time_of_tour');?>
				</td>
				<td class='label'>
					 <?php __("Zipcode"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('zipcode');?>
				</td>
			</tr>

			<tr>
				<td class='label'>
					 <?php __("Call Back"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('call_back');?>
				</td>
				<td class='label'>
					 <?php __("Mail Information"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('mail_information');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Confirm Tour Schedule"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('confirm_tour_schedule');?>
				</td>
				<td class='label'>
					 <?php __("Resident Name"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_name');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Resident Date Of Birth"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('resident_date_of_birth');?>
				</td>
				 <td class='label'>
					 <?php __("Resident Age"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_age');?>
				</td>
			</tr>
			<tr>
			  
				<td class='label'>
					 <?php __("Resident City"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_city');?>
				</td>
				 <td class='label'>
					 <?php __("Resident State"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_state');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Resident Zipcode"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_zipcode');?>
				</td>
				 <td class='label'>
					 <?php __("Resident Phone "); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_phone');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Monthly Income"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('monthly_income');?>
				</td>
				<td class='label'>
					 <?php __("Veteran"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('veteran');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Resident Lives"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_lives', array('type' => 'select', 'options' => $residentLivesOptions, 'empty' => '-Select'));?>
				</td>
				 <td class='label'>
					 <?php __("Resident Has"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('resident_has', array('type' => 'select', 'options' => $residentHasOptions, 'empty' => '-Select-'));?>
				</td>
			</tr>
			<tr>
			  
				<td class='label'>
					 <?php __("Medication"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('medication');?>
				</td>
				<td class='label'>
					 <?php __("Bathing"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('bathing');?>
				</td>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Meals"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('meals');?>
				</td>
				 <td class='label'>
					 <?php __("Transefering"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('transefering');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Continent"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('continent');?>
				</td>
				<td class='label'>
					 <?php __("Incontinent"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('incontinent');?>
				</td>
			</tr>
			<tr>
			   
				<td class='label'>
					 <?php __("Walker"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('walker');?>
				</td>
				 <td class='label'>
					 <?php __("Cane"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('cane');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Wheel Chair"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('wheel_chair');?>
				</td>
				 <td class='label'>
					 <?php __("Dressing"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('dressing');?>
				</td>
			</tr>
			<tr>
				<td class='label'>
					 <?php __("Diabetic"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('diabetic');?>
				</td>
				<td class='label'>
					 <?php __("Insulin Dependent"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('insulin_dependent');?>
				</td>
			</tr>
			<tr>
			   
				<td class='label'>
					 <?php __("Genral Health Info"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('genral_health_info');?>
				</td>
				<td class='label'>
					 <?php __("Internet Search"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('internet_search');?>
				</td>
			</tr>
			<tr>
			   
				<td class='label'>
					 <?php __("Friend"); ?>
				</td>
				<td class='control '>
				<?php echo $this->Form->input('friend');?>
				</td>
				 <td class='label'>
					 <?php __("Print"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('print');?>
				</td>
			</tr>
			<tr>
			  
				<td class='label'>
					 <?php __("Other"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('other');?>
				</td>
				 <td class='label'>
					&nbsp;
				</td>
				<td class='control'>
				&nbsp;
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr style="border:0px">
	<td class="content_cell" style="border:0px">
		<table class="form_table" width="100%">
			<tr>
				<th colspan='4' class='header_row2'>Admin Tour</th>
			</tr>
			<tr>
			   <td class='label'>
					 <?php __("Admin Tour Time"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('admin_tour_time');?>
				</td>
				<td class='label'>
					 <?php __("Admin Tour Date"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('admin_tour_date');?>
				</td>
			</tr>
			<tr>
			   <td class='label'>
					 <?php __("Admin Employe Took Info"); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('admin_employe_took_info');?>
				</td>
				<td class='label'>
					 <?php __("Admin Employe Tour"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('admin_employe_tour');?>
				</td>
			</tr>
			<tr>
			   <td class='label'>
					 <?php __("Admin Move In Date"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('admin_move_in_date');?>
				</td>
				<td class='label'>
					 <?php __("Admin Move In Other Facility"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('admin_move_in_other_facility');?>
				</td>
			</tr>
			<tr>
			   <td class='label'>
					 <?php __("Admin Move In With Family "); ?>
				</td>
				<td class='control'>
				<?php echo $this->Form->input('admin_move_in_with_family');?>
				</td>
				<td class='label'>
					 <?php __("Comments"); ?>
				</td>
				<td class='control request'>
				<?php echo $this->Form->input('comments');?>
				</td>
			</tr>
		</table>
	</td>
</tr>