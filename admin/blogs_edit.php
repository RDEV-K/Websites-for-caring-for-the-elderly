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
	$description=addslashes($_POST['page_content']);
	$active=$_POST['active'];
	if($_POST['active']=='on'){
		$active=1;
	}else{
		$active=0;
	}
	mysql_query("update blogs set title='$title',date='$date',description='$description',active='$active' where id='$edit'");
	echo "<script>window.location.href='blogs.php?msg=yes';</script>";
}
?>
<script type="text/javascript">
function back_frm()
    {
	 window.location.href='blogs.php';
  }
</script>
<?php
$sel=mysql_query("select * from blogs where id='$edit_id'");
$row=mysql_fetch_array($sel);
$beg_exp=explode('-',$row['date']);
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
			Testimonials Manager		
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="blogs_edit.php">	
<input type="hidden" name="edit" value="<?php echo $edit_id; ?>">
	<table class="search_option_table">
		<tr>
			<th class="font_11_black">
				Edit Testimonials
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