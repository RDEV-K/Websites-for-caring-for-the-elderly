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
         <?php __("Date"); ?>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('date');?>
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
    		if(!empty($this->data['Blog']['description']))
			    $this->Fck->Value = $this->data['Blog']['description'];
			if(!empty($this->validationErrors['Blog']['description']))
			    $this->Fck->Error = $this->validationErrors['Blog']['description'];
		   echo $this->Fck->Create('Blog/description');
			
	    ?>
    </td>
</tr>

<tr>
    <td class='label'>
         <?php __("active"); ?>
    </td>
    <td class='control'>
    
        <?php echo $this->Form->input('active');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>