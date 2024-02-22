<tr>
    <td class='label'>
         <?php __("Parent Page"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('parent_id' , array('class'=>'notEmpty','options'=>$pages));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Name"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('name' , array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("French Name"); ?> <span class='required_fields'>*</span>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('french_name' , array('class'=>'notEmpty'));?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Title"); ?>
    </td>
    <td class='control'>
	<?php echo $this->Form->input('title');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Meta Keyword"); ?> 
    </td>
    <td class='control'>
		<?php echo $this->Form->input('meta_keyword');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Meta Description"); ?>
    </td>
    <td class='control'>
		<?php echo $this->Form->input('meta_description');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Content"); ?>
    </td>
    <td colspan ='3'>
    	<?php
    		if(!empty($this->data['Page']['content']))
			    $this->Fck->Value = $this->data['Page']['content'];
			if(!empty($this->validationErrors['Page']['content']))
			    $this->Fck->Error = $this->validationErrors['Page']['content'];
		   echo $this->Fck->Create('Page/content');
			
	    ?>
    </td>
</tr>

<tr>
    <td class='label'>
         <?php __("French Content"); ?>
    </td>
    <td colspan ='3'>
    	<?php
    		if(!empty($this->data['Page']['french_content']))
			    $this->Fck->Value = $this->data['Page']['french_content'];
			if(!empty($this->validationErrors['Page']['french_content']))
			    $this->Fck->Error = $this->validationErrors['Page']['french_content'];
		   echo $this->Fck->Create('Page/french_content');
			
	    ?>
    </td>
</tr>

<tr>
    <td class='label'>
         <?php __("Display Order"); ?>
    </td>
    <td class='control'>
	<?php echo $this->Form->input('display_order');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

<tr>
    <td class='label'>
         <?php __("Status"); ?>
    </td>
    <td class='control'>
    
        <?php echo $this->Form->input('active');?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>