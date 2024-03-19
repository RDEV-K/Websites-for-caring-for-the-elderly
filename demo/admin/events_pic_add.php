<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php');




$alwidth = 135;            // maximum allowed width, in pixels
$alheight = 142;           // maximum allowed height, in pixels

if(isset($_FILES['img_path']))
{
	list($width, $height) = getimagesize($_FILES['img_path']['tmp_name']);     // gets image width and height
	$err = '';         // to store the errors

	// Checks if the file has allowed type, size, width and height (for images)
  if(isset($width) && isset($height) && ($width != $alwidth || $height != $alheight))
  $err .= '<br/>The maximum Width x Height of image must be: ('. $alwidth. ' x '. $alheight.") pixels";


 

$edit_id=$_REQUEST['edit_id'];
 if($err == '') 
  {
	$img_label=$_POST['img_label'];
	$img_setting=$_POST['img_setting'];
	
	if($_FILES["img_path"]["name"]==""){
		$save_img=$_REQUEST['old_upload'];
	}else{
		$save_img=$_FILES["img_path"]["name"];
	}
	$result=mysql_query("insert into events_pic set img_path='$save_img',img_label='$img_label',img_setting='$img_setting'");
	if($result && $_FILES["img_path"]["name"]<>"")
	 {	
	 
	 	$path_img="../../event/".$save_img;
		move_uploaded_file($_FILES["img_path"]["tmp_name"],$path_img);
		chmod($path_img, 0777);
		/*$target_Folder ="../../event/";
		$target_Path = $target_Folder.basename( $_FILES['img_path']['name'] );
		$savepath = $target_Path.basename( $_FILES['img_path']['name'] );
		move_uploaded_file( $_FILES['img_path']['tmp_name'],     $target_Path );*/
		
		//chmod($path_img, 0777);
	 }
	 $msg = "Event Image Added successfully";
	/*echo "<script>window.location.href='events_pic.php?msg=yes';</script>";*/
}


}
?>






<script type="text/javascript">

function chk()
{

if(document.form.img_path.value == "")
	{
	alert ("Please attach a image to be uploaded");
	document.form.img_path.focus();
	return false;
}else
if(document.form.img_label.value == "")
	{
	alert ("Please enter image Label");
	document.form.img_label.focus();
	return false;
}else
if(document.form.img_setting.value == "")
	{
	alert ("Please select image Position");
	document.form.img_setting.focus();
	return false;
}else
	{
	document.form.submit();
	}
}

function back_frm()
    {
	 window.location.href='events.php';
  }
</script>
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
<form controller="referFriends" name="form" id="ReferFriendIndexForm" onSubmit="return chk();" method="post" action="events_pic_add.php" enctype="multipart/form-data">	
<input type="hidden" name="ins" value="yes">
	<table class="search_option_table">
		<tr>
			<th class="font_11_black">
				Add Event Pictures
			- <span style="color:#FF0000">(Image width * height must be 135*142(pixels))</span> </th>
		</tr>
		<tr>
			<td>
				<table class="form_table" width="100%">
                
                	<tr>
						<td colspan="2" class='font_11_black'>
							<span style="color:#FF0000"><?php  echo $err; ?></span>
                            <span style="color:green"><?php  echo $msg; ?></span>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Image:
						</td>
						<td class='control'>
							<input name="img_path" id="img_path" type="file"  accept='image/*' class="notEmpty" maxlength="255" />    
							<?php if($row['img_path']!=""){?><a href="../event/<?php echo $row['img_path']; ?>" target="_blank"><img src="../event/<?php echo $row['img_path']; ?>" width="30" height="30"></a><?php }?>
                            <span style="color:#FF0000; font-size:11px;" >(Only jpeg and png format are acceptable)</span>
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Image Label:
						</td>
						<td class='control'>
							<input name="img_label" type="text" class="notEmpty" maxlength="255" value="<?php echo $row['img_label']; ?>"  />    </td>
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
        
        <tr>
						<td class='font_11_black'>
							For resize you images <a href="resize_image_links.php" >click here</a>.
						</td>
						<td class='control'>
							
						</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
	
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