
<html>
<head>
<title>Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="common/style.css">
<link rel="stylesheet" type="text/css" href="common/admin_styles.css" />
</head>
<body style="margin:0px;">
<table cellpadding="0" cellspacing="0" width="100%" border="0">
	<tr>
		<td bgcolor="#ffffff" colspan="4" height="80" class="admin_header"><img src="images/logo.png"></td>
	</tr>
	<tr>
		<td colspan="4"  bgcolor="#98B153">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td width="28%" bgcolor="#1C5978" style="height:35px;">&nbsp;</td>
					<td width="15%" align="right"  bgcolor="#1C5978" style="padding-right:10px;">
					<?php if($_SESSION['u_name']<>""){?>
						<input type="button" name="log_out" value="Log Out" onClick="javascript:window.location.href='logout.php'">
					<?php }?>	
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td height="20">&nbsp;</td></tr>
	<tr>
		<td width="2%">&nbsp;</td>
		<td width="20%" align="left" valign="top" style="padding-right:15px;">
		<?php if($_SESSION['u_name']<>""){?>
			<?php require_once('navi.php');?>
		<?php } ?>
		</td>
		<td width="74%" valign="top" height="450">
		
		