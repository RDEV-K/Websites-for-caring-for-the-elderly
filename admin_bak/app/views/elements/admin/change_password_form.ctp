<tr>
    <td class='label'>
        Old Password <span class='required_fields'>*</span>
    </td>
    <td class='control'>
        <?php
         	echo $form->input('User.old_password' , array('type'=>'password','div'=>false, 'label'=>false ,'class'=>'notEmpty'))
        ?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
    <td class='label'>
        New Password <span class='required_fields'>*</span>
    </td>
    <td class='control'>
        <?php
         	echo $form->input('User.new_password' , array('type'=>'password','div'=>false, 'label'=>false ,'class'=>'notEmpty'))
        ?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
    <td class='label'>
        Confirm Password <span class='required_fields'>*</span>
    </td>
    <td class='control'>
        <?php
         	echo $form->input('User.confirm_password' , array('type'=>'password','div'=>false, 'label'=>false ,'class'=>'notEmpty'))
        ?>
    </td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>

