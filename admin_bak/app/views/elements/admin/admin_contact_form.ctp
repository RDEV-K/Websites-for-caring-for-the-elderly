<tr>
    <td class='label'>
         <?php __("First Name"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('first_name' , array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Last Name"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('last_name' , array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Email"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('email',array('class'=>'notEmpty vaildEmail'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Phone"); ?>
    </td>
    <td class='control'>
	<?php echo $this->Form->input('phone_number');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Message"); ?>
    </td>
    <td colspan ='3'>
    	<?php echo $this->Form->input('message');?>
    </td>
</tr>

<tr>
    <td class='label'>
         <?php __("Agree"); ?>
    </td>
    <td class='control'>
    
        <?php echo $this->Form->input('is_agree');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>