<?php
include "common/session.php";
include_once 'common/conn.php';

if(isset($_POST['btnSubmit']) &&($_POST['btnSubmit'])=="Save" ){
		if($_POST['conf_pass']<>"" && $_POST['old_pass']<>"" && $_POST['new_pass']){
			$old_pass=$_POST['old_pass'];
			$sel=mysql_query("select * from users where password='$old_pass'");
			if(mysql_num_rows($sel)>0){
				 $new_pass=$_POST['new_pass'];
				 $conf_pass=$_POST['conf_pass'];
				 $sql="update users set password ='$conf_pass' where id='1'";
				 $result=mysql_query($sql)or die(mysql_error());
				 if($result)
				 {
					echo "<script>location.href='chg_pass.php?msg=edit'</script>";
				 }
			}else{
					echo "<script>location.href='chg_pass.php?msg=wrong'</script>";
			} 
		} 
	}

?>

<script language="JavaScript" type="text/javascript">

function empty_cat(){
	if(document.chg.old_pass.value=="")
	{
		alert("Please enter the Old Password")
		return false;
	}
	else if(document.chg.new_pass.value=="")
	{
		alert("Please enter the New Password")
		return false;
	}
	else if(document.chg.conf_pass.value=="")
	{
		alert("Please enter the Confirm Password")
		return false;
	}else if(document.chg.new_pass.value!=document.chg.conf_pass.value)
	{
		alert("Please Check new password and confirm password")
		return false;
	}
	else{
		document.chg.submit();
		return true;
	}
}
	
	</script>

	<?php require('common/header.php'); ?>
	<table id="container_table" cellpadding='0' cellspacing='0' align="center">
<tr>
<td id="contents" valign="top">
<table id="contents_table" cellpadding='0' cellspacing='0'>
<tr><td height="25px">&nbsp;</td></tr>
<tr>
<td>
<div class="staticPages index">
<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<tr>
		<td class="content_heading">
			Change Password
		</td>
	</tr>
</table>	
<form action="chg_pass.php" name="chg" method="post" onSubmit="return empty_cat();">
	<table class="search_option_table" cellpadding="0" cellspacing="0">
		<tr>
			<th colspan="2" class="font_11_black">
				Change Password
			</th>
		</tr>
		<tr>
			<td valign="top" class="font_11_black" style="width:170px; ">Old Password :</td>
			<td><input type="password" name="old_pass" size="40"></td>
		</tr>
		<tr>
			<td valign="top" class="font_11_black">New Password :</td>
			<td><input type="password" name="new_pass" size="40"></td>
		</tr>
		<tr>
			<td valign="top" class="font_11_black">Confirm Password :</td>
			<td><input type="password" name="conf_pass" size="40"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center;">
				<div class="submit"><input class="admin_button" name="btnSubmit" type="submit" value="Save" /></div>			
			</td>
		</tr>
	</table>
</form>
</td>
</tr>
</table>

</td>
</tr>
</table>	
<?php require('common/footer.php'); ?>