<?php

#Used for display information when we edit Modul With Multi Tab.
# $manager : < name of the Modul >
# $field : <field name that you want to diasplay as information>
# $descritpion : <field value>.
?>
<table class="top_info_table">
	<tr>
		<th colspan="2">
			<?php echo $manager.' Information'; ?> 
		</th>
	</tr>

	<tr>
		<td width="30%">
			<?php echo $manager.' ID :'; ?>
		</td>
		<td>	
			<?php echo $id ;?>
		</td>
	</tr>
	<tr>
		<td width="30%">
			<?php echo $manager.' '.$field.':'; ?>
		</td>
		
		<td>
			<?php echo $description ; ?>
		</td>
	</tr>
</table>