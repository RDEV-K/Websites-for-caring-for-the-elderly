<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
	::Request Info::
	</title>
	
	<?php
			
		echo $html->css('admin_styles');
		
		?>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="header_top">
				<div id="header_logo">
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
					<td id="contents" valign="top">
						<table id="contents_table" cellpadding='0' cellspacing='0' width="100%" style="width:100%">
							<tr><td height="25px">&nbsp;</td></tr>
							<tr>
								<td align="center">
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
		
</body>
</html>