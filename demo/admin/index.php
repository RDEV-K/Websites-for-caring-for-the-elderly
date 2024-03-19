<?php
require_once('common/header.php');
require_once('common/conn.php');
?>
<html>
<head>
<title>Welcome to admin Pannel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css_stayahead_admin.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript">
function chk()
{
  if(document.frmlogin.u_name.value=="")
  {
     alert("Please enter the username");
	 document.frmlogin.u_name.focus();
	 return false;
  }
  if(document.frmlogin.u_pass.value=="")
  {
     alert("Please enter the password");
	 document.frmlogin.u_pass.focus();
	 return false;
  }
  
}

</script>

<table width="70%" border="0" cellspacing="5" cellpadding="2" bgcolor="#FFFFFF">
	<tr>
		<td valign="top"  style="padding-top:17%;" align="center">
			<form action="requests.php" method="POST" name="frmlogin" onSubmit="return chk();">
			<table width="50%" bgcolor="#CECFCE"  border="0" cellpadding="3" cellspacing="3" class="center_brd">
				<tr><td colspan="2" class="txt_11"  align="center" height="20px"></td></tr>
				<tr><td>&nbsp;</td><td class="font_11_black">User Name:</td><td><input class="txt_11" type="text" name="u_name" value="" /></td></tr>

				<tr><td>&nbsp;</td><td class="font_11_black" height="50px">Password:</td><td><input class="txt_11" type="password" name="u_pass" value="" /></td></tr>
				<tr><td>&nbsp;</td><td colspan="2" align="center"><input type="submit" name="btnlogin" value="Login" class="admin_button" /></td></tr>
				<tr><td colspan="2" class="txt_11"  align="center" height="10px"></td></tr>
			</table>
			</form>
		</td>
	</tr>
</table>

<?php require_once('common/footer.php'); ?>