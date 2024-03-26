<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<tr>
		<td class="content_heading">
			<?php __($contentTitle); ?>
		</td>
	</tr>
	<?php
		if(isset($newLink)){
			echo("<tr><td class='page_description'>");
			echo($newLink['description']);
			echo("</td></tr>");
			echo("<tr><td class='newLink' align='center'>");
			echo $html->link('Click here', array('controller'=>$newLink['controller_name'], 'action'=>'add'));
			echo(" to create ");
			echo $html->link($newLink['link_text'], array('controller'=>$newLink['controller_name'], 'action'=>'add'));
			echo("</tr></td>");
		}
	?>
</table>