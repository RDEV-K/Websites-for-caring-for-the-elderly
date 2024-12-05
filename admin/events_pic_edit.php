<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
include ("fckeditor.php");
$edit_id=$_REQUEST['edit_id'];
if($_POST['edit']>0){
	$edit=$_POST['edit'];
	$img_label=$_POST['img_label'];
	$img_setting=$_POST['img_setting'];
	
	if($_FILES["img_path"]["name"]==""){
		$save_img=$_REQUEST['old_upload'];
	}else{
		$save_img=$_FILES["img_path"]["name"];
	}
	$result=mysql_query("update events_pic set img_path='$save_img',img_label='$img_label',img_setting='$img_setting' where id='$edit'");
	if($result && $_FILES["img_path"]["name"]<>"")
	 {
		$path_img="../event/".$save_img;
		move_uploaded_file($_FILES["img_path"]["tmp_name"],$path_img);
		chmod($path_img, 0777);
	 }
	echo "<script>window.location.href='events_pic.php?msg=yes';</script>";
}
?>
<script type="text/javascript">
function back_frm()
    {
	 window.location.href='events.php';
  }
</script>
<?php
$sel=mysql_query("select * from events_pic where id='$edit_id'");
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
			Event Pictures Manager		
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="events_pic_edit.php" enctype="multipart/form-data">	
<input type="hidden" name="edit" value="<?php echo $edit_id; ?>">
<input type="hidden" name="old_upload" value="<?php echo $row['img_path']; ?>">
	<table class="search_option_table">
		<tr>
			<th class="font_11_black">
				Add Event Pictures
			</th>
		</tr>
		<tr>
			<td>
				<table class="form_table" width="100%">
					<tr>
						<td class='font_11_black'>
							Image:
						</td>
						<td class='control'>
							<input name="img_path" type="file" class="notEmpty" maxlength="255" />    
							<?php if($row['img_path']!=""){?><a href="../event/<?php echo $row['img_path']; ?>" target="_blank"><img src="../event/<?php echo $row['img_path']; ?>" width="30" height="30"></a><?php }?>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Image Label:
						</td>
						<td class='control'>
							<input name="img_label" type="text" class="notEmpty" maxlength="255" value="<?php echo $row['img_label']; ?>" id="ReferFriendFirstName" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Image Position:
						</td>
						<td class='control'>
							<select name="img_setting">
								<option value=""></option>
								<option value="top_left" <?php if($row['img_setting']=="top_left"){echo"selected";} ?>>Top Left</option>
								<option value="top_right" <?php if($row['img_setting']=="top_right"){echo"selected";} ?>>Top Right</option>
								<option value="center" <?php if($row['img_setting']=="center"){echo"selected";} ?>>Center</option>
								<option value="bottom_left" <?php if($row['img_setting']=="bottom_left"){echo"selected";} ?>>Bottom Left</option>
								<option value="bottom_right" <?php if($row['img_setting']=="bottom_right"){echo"selected";} ?>>Bottom Right</option>
							</select>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr> 
					
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