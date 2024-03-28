<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
	::Request Info::
	</title>
	<?php
		//echo $this->Html->meta('icon');
		echo $html->css(array('admin_styles','datePicker.css'));
		echo $this->Javascript->link(array('jquery-1.5.1.min','validation_rules','date.js','jquery.datePicker.js','cake.datePicker.js'));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="header_top">
				<div id="header_logo">
					
				</div>
				<div id="header_top_logout">
					<?php
						echo $html->link('Logout', array('controller'=>'users', 'action'=>'admin_logout','admin'=>1));
					?>
				</div>
			</div>
			<div id="header_bottom">
				<div id="header_bottom_contents">
					<?php echo date('l, jS F Y'); ?>
				</div>
			</div>
		</div>
		<div id="container">
			<table id="container_table" cellpadding='0' cellspacing='0' align="center">
				<tr>
					<td id="side_links" valign="top">
					<?php echo $this->element("admin/admin_side_links"); ?> 					
					</td>
					<td id="links_contents_separator"></td>
					<td id="contents" valign="top">
						<table id="contents_table" cellpadding='0' cellspacing='0'>
							<tr><td height="25px">&nbsp;</td></tr>
							<tr>
								<td>
									<?php echo $session->flash(); ?>
									<?php echo $session->flash('auth'); ?>
									<?php echo $content_for_layout; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div id="footer">
			<span id="footer_contents"></span>
		</div>
                <?php echo $this->element('sql_dump'); ?>
        </div>
</body>
</html>