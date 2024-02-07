<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
include ("fckeditor.php");
$edit_id=$_REQUEST['edit_id'];
if($_POST['edit']>0){
	$edit=$_POST['edit'];
	$title=$_POST['title'];
	$date=$_POST['p_Year'].'-'.$_POST['p_Month'].'-'.$_POST['p_Day'];
	if($_POST['st_am_pm']=='pm'){
		$st_hour=12+$_POST['st_hour'];
	}else{
		$st_hour=$_POST['st_hour'];
	}
	if($_POST['end_am_pm']=='pm'){
		$end_hour=12+$_POST['end_hour'];
	}else{
		$end_hour=$_POST['end_hour'];
	}
	$st_time=$st_hour.':'.$_POST['st_mint'];
	$end_time=$end_hour.':'.$_POST['end_mint'];
	$img_label=$_POST['img_label'];
	$img_setting=$_POST['img_setting'];
	$description=addslashes($_POST['page_content']);
	$active=$_POST['active'];
	if($_POST['active']=='on'){
		$active=1;
	}else{
		$active=0;
	}
	if($_FILES["img_path"]["name"]==""){
		$save_img=$_REQUEST['old_upload'];
	}else{
		$save_img=$_FILES["img_path"]["name"];
	}
	$result = mysql_query("update events set title='$title',event_date='$date',description='$description',active='$active',
				start_time='$st_time',end_time='$end_time',img_path='$save_img',img_label='$img_label',img_setting='$img_setting' where id='$edit'");
	if($result && $_FILES["img_path"]["name"]<>"")
	 {
		$path_img="../event/".$save_img;
		move_uploaded_file($_FILES["img_path"]["tmp_name"],$path_img);
		chmod($path_img, 0777);
	 }
	echo "<script>window.location.href='events.php?msg=yes';</script>";
}
?>
<script type="text/javascript">
function back_frm()
    {
	 window.location.href='events.php';
  }
</script>
<?php
$sel=mysql_query("select * from events where id='$edit_id'");
$row=mysql_fetch_array($sel);
$beg_exp=explode('-',$row['event_date']);
$st_time_exp=explode(':',$row['start_time']);
$end_time_exp=explode(':',$row['end_time']);
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
			Event Manager		
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="events_edit.php" enctype="multipart/form-data">	
<input type="hidden" name="edit" value="<?php echo $edit_id; ?>">
<input type="hidden" name="old_upload" value="<?php echo $row['img_path']; ?>">
	<table class="search_option_table">
		<tr>
			<th class="font_11_black">
				Edit Event
			</th>
		</tr>
		<tr>
			<td>
				<table class="form_table" width="100%">
					<tr>
						<td class='font_11_black'>
							Title:
						</td>
						<td class='control'>
							<input name="title" type="text" class="notEmpty" maxlength="255" value="<?php echo $row['title']; ?>" id="ReferFriendFirstName" />    </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Date:
						</td>
						<td class='control'>
								<select name="p_Month" style="width:100px;" class="txt_label" id="p_Month">
							  <option value="">MONTH</option>
							   <option value="01" <?php if($beg_exp[1]=='01'){echo "selected";} ?>>January</option>
							  <option value="02" <?php if($beg_exp[1]=='02'){echo "selected";} ?>>February</option>
							  <option value="03" <?php if($beg_exp[1]=='03'){echo "selected";} ?>>March</option>
							  <option value="04" <?php if($beg_exp[1]=='04'){echo "selected";} ?>>April</option>
							  <option value="05" <?php if($beg_exp[1]=='05'){echo "selected";} ?>>May</option>
							  <option value="06" <?php if($beg_exp[1]=='06'){echo "selected";} ?>>June</option>
							  <option value="07" <?php if($beg_exp[1]=='07'){echo "selected";} ?>>July</option>
							  <option value="08" <?php if($beg_exp[1]=='08'){echo "selected";} ?>>August</option>
							  <option value="09" <?php if($beg_exp[1]=='09'){echo "selected";} ?>>September</option>
							  <option value="10" <?php if($beg_exp[1]=='10'){echo "selected";} ?>>October</option>
							  <option value="11" <?php if($beg_exp[1]=='11'){echo "selected";} ?>>November</option>
							  <option value="12" <?php if($beg_exp[1]=='12'){echo "selected";} ?>>December</option>
							</select> <select name="p_Day" style="width:70px;" class="txt_label" id="p_Day">
							  <option value="">DAY</option>
							  <?php  for($g=1;$g<32;$g++){ ?>
							  	 <option value="<?php echo $g; ?>" <?php if($beg_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
							  <?php }?>
							</select> <select name="p_Year" style="width:90px;" class="txt_label" id="p_Year">
							  <option value="">YEAR</option>
							  <?php 
							  $cur_y=date('Y');
							  $cur_y_gr=date('Y')+10;
							  for($i=$cur_y;$i<$cur_y_gr;$i++){
							  ?>
							  <option value="<?php echo $i; ?>" <?php if($beg_exp[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
							  <?php } ?>
							</select> 
						 </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							Start Time:
						</td>
						<td class='control'>
							<?php
								if($st_time_exp[0]>12){
									$st_time=$st_time_exp[0]-12;
									$am_pm="pm";
								}else{
									$st_time=$st_time_exp[0];
									$am_pm="am";
								}
							?>
							 <select name="st_hour" style="width:70px;" class="txt_label" id="hour">
							  <?php  for($g=1;$g<13;$g++){ ?>
							  	 <option value="<?php echo $g; ?>" <?php if($st_time==$g){echo "selected";} ?>><?php echo $g; ?></option>
							  <?php }?>
							</select> 
							 <select name="st_mint" style="width:70px;" class="txt_label" id="mint">
							  <?php  for($g=0;$g<61;$g++){ ?>
							  	 <option value="<?php echo $g; ?>" <?php if($st_time_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
							  <?php }?>
							</select>
							<select name="st_am_pm" style="width:90px;" class="txt_label" id="am_pm">
							  <option value="am" <?php if($am_pm=='am'){echo "selected";} ?>>am</option>
							  <option value="pm" <?php if($am_pm=='pm'){echo "selected";} ?>>pm</option>
							</select> 
						 </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class='font_11_black'>
							End Time:
						</td>
						<td class='control'>
							<?php
								if($end_time_exp[0]>12){
									$end_time=$end_time_exp[0]-12;
									$end_am_pm="pm";
								}else{
									$end_time=$end_time_exp[0];
									$end_am_pm="am";
								}
							?>
							 <select name="end_hour" style="width:70px;" class="txt_label" id="hour">
							  <?php  for($g=1;$g<13;$g++){ ?>
							  	 <option value="<?php echo $g; ?>" <?php if($end_time==$g){echo "selected";} ?>><?php echo $g; ?></option>
							  <?php }?>
							</select> 
							 <select name="end_mint" style="width:70px;" class="txt_label" id="mint">
							  <?php  for($g=0;$g<61;$g++){ ?>
							  	 <option value="<?php echo $g; ?>" <?php if($end_time_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
							  <?php }?>
							</select>
							<select name="end_am_pm" style="width:90px;" class="txt_label" id="am_pm">
							  <option value="am" <?php if($end_am_pm=='am'){echo "selected";} ?>>am</option>
							  <option value="pm" <?php if($end_am_pm=='pm'){echo "selected";} ?>>pm</option>
							</select> 
						 </td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<!-- <tr>
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
							Image Setting:
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
					</tr> -->
					<tr>
						<td class='font_11_black' valign="top">Description:</td>
						<td colspan ='3'>
						<?php  
							   $page_content=$row['description'];
							   $oFCKeditor = new FCKeditor('page_content'); // the variable which will use in storing data
							   $oFCKeditor->BasePath = FCK_ED_PATH;  //path for the editor
							   $finalmsg=$temp_header.$edmsg;
							   $oFCKeditor->Value ="$page_content";  // the variable which will use in editing
							   if ( isset($_GET['Lang']) )
							   {
									$oFCKeditor->Config['AutoDetectLanguage']= false ;
									$oFCKeditor->Config['DefaultLanguage']= $_GET['Lang'] ;
							   }
							   else
							   {
									$oFCKeditor->Config['AutoDetectLanguage']= true ;
									$oFCKeditor->Config['DefaultLanguage']='en' ;
								}
							
									$oFCKeditor->Width  = '100%' ;
									$oFCKeditor->Height = '500' ;
									$oFCKeditor->Create() ;
									
							?>		
						</tr>
				
						<tr>
							<td class='font_11_black'>
								Active:   
							</td>
							<td class='control'>
								<input type="checkbox" name="active" id="ReferFriendIsAgree" <?php if($row['active']==1){echo"checked";} ?>/>    </td>
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