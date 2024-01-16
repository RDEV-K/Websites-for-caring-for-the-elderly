<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
$edit_id=$_REQUEST['edit_id'];
if($_POST['edit']>0){
	$edit=$_POST['edit'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];
	$message=$_POST['message'];
	if($_POST['is_agree']=='on'){
		$is_agree=1;
	}else{
		$is_agree=0;
	}
	mysql_query("update contacts set first_name='$first_name',last_name='$last_name',email='$email',phone_number='$phone_number',message='$message',is_agree='$is_agree' where id='$edit'");
	echo "<script>window.location.href='contacts.php?msg=yes';</script>";
}
?>
<script type="text/javascript">
function back_frm()
    {
	 window.location.href='refer_friends.php';
  }
</script>
<?php
$sel=mysql_query("select * from contacts where id='$edit_id'");
$row=mysql_fetch_array($sel);
?>
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
			Contact Manager		
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="contacts_edit.php">	
<input type="hidden" name="edit" value="<?php echo $edit_id; ?>">
	<table class="search_option_table">
		<tr>
			<th class="font_11_black">
				Edit Contacts
			</th>
		</tr>
		<tr>
			<td>
				<table class="form_table" width="100%">
					<tr>
						<td class='font_11_black'>
							First Name:
						</td>
						<td class='control'>
							<input name="first_name" type="text" class="notEmpty" maxlength="255" value="<?php echo $row['first_name']; ?>" id="ReferFriendFirstName" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Last Name:
						</td>
						<td class='control'>
							<input name="last_name" type="text" class="notEmpty" maxlength="255" value="<?php echo $row['last_name']; ?>" id="ReferFriendLastName" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				
					<tr>
						<td class='font_11_black'>
							Email:
						</td>
						<td class='control'>
							<input name="email" type="text" class="notEmpty vaildEmail" maxlength="255" value="<?php echo $row['email']; ?>" id="ReferFriendEmail" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				
					<tr>
						<td class='font_11_black'>Phone:</td>
						<td class='control'>
							<input name="phone_number" type="text" maxlength="256" value="<?php echo $row['phone_number']; ?>" id="ReferFriendPhoneNumber" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				
					<tr>
						<td class='font_11_black'>Message:</td>
						<td colspan ='3'>
							<textarea name="message" cols="30" rows="6" id="ReferFriendMessage" ><?php echo $row['message']; ?></textarea>    </td>
						</tr>
				
						<!-- <tr>
							<td class='font_11_black'>
								Agree:   
							</td>
							<td class='control'>
								<input type="checkbox" name="is_agree" id="ReferFriendIsAgree" <?php if($row['is_agree']==1){echo"checked";} ?>/>    </td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>		 -->
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<input class="admin_button" type="submit" value="Save" /> 
				<button type="button" class="admin_button" onclick="back_frm();">Cancel</button>		
			</td>
		</tr>
	</table>
</form>
</div>		
</td>
</tr>
</table>

</td>
</tr>
</table>		
<?php
include "common/footer.php";
?>			