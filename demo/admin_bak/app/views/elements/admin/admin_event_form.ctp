<tr>
    <td class='label'>
         <?php __("Title"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('title' , array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Event Date"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('event_date',array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Start time"); ?>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('start_time');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("End Time"); ?>
    </td>
    <td class='control'>
	<?php echo $this->Form->input('end_time');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Description"); ?>
    </td>
    <td colspan ='3'>
    	<?php
    		if(!empty($this->data['Event']['description']))
			    $this->Fck->Value = $this->data['Event']['description'];
			if(!empty($this->validationErrors['Event']['description']))
			    $this->Fck->Error = $this->validationErrors['Event']['description'];
		   echo $this->Fck->Create('Event/description');
			
	    ?>
    </td>
</tr>

<tr>
    <td class='label'>
         <?php __("Active"); ?>
    </td>
    <td class='control'>
        <?php echo $this->Form->input('active');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>