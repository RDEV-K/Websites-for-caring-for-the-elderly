<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
if($_REQUEST['del_id']>0){
	$del_id=$_REQUEST['del_id'];
	mysql_query("delete from requests where id='$del_id'");
}
?>
<script type="text/javascript">
function checkdel()
    {
	  var checkdel=confirm("Are you sure to delete?");
	 if(!checkdel)
	 {
	  return false;
	 }
  }
</script>
<table id="container_table" cellpadding='0' cellspacing='0' align="center">
<tr>
<td id="contents" valign="top">
<table id="contents_table" cellpadding='0' cellspacing='0'>
<tr><td height="25px">&nbsp;</td></tr>
<?php if($_REQUEST['msg']!=""){?>
<tr>
	<td class="font_11_black">
		The request has been saved.
	</td>
</tr>
<?php } ?>
<tr>
<td>
<div class="staticPages index">
<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<tr>
		<td class="content_heading">
			Request Manager
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="requests.php" accept-charset="utf-8">	
	<table class="search_option_table">
		<tr>
			<th colspan="3" class="font_11_black">
				Search
			</th>
		</tr>
	
		<tr>
			<td width='90px' class="font_11_black">
				First Name :
			</td>
			<td width='350px' class="font_11_black">
				<input name="first_name" type="text" maxlength="150" id="ReferFriendFirstName" style="width:110px;" />			
				&nbsp;&nbsp;Last Name :&nbsp;&nbsp;<input name="last_name" type="text" maxlength="150" style="width:110px;"  id="ReferFriendLastName" />
			</td>
			<td class="font_11_black">&nbsp;</td>
		</tr>
		<tr>
			<td class="font_11_black">
				Tour Date :
			</td>
			<td>
				<div class="input text">
				<select name="RequestTourDateMonth" twoDigitDay="1" id="RequestTourDateMonth" style="width:99px; ">
				<option value="">Month</option>
				<?php  for($g=1;$g<13;$g++){ ?>
					 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
				<?php } ?>
				</select>-<select name="RequestTourDateDay" twoDigitDay="1" id="RequestTourDateDay" style="width:99px; ">
				<option value="">Day</option>
				<?php  for($g=1;$g<32;$g++){ ?>
					 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
				<?php } ?>
				</select>-<select name="RequestTourDateYear" twoDigitDay="1" id="RequestTourDateYear" style="width:99px; ">
				<option value="">Year</option>
				<?php  for($g=2012;$g<2022;$g++){ ?>
					 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
				<?php } ?>
				
				</select></div>			
			</td>
			<td>
				<div class="submit"><input class="admin_button" type="submit" value="Search" /></div>			
			</td>
		</tr>
	</table>
</form>
<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="font_11_black">ID</th>
		<th class="font_11_black">Name</th>
		<th class="font_11_black">Tour Date</th>
		<th class="font_11_black">Edit</th>
		<th class="font_11_black">Delete</th>
	</tr>
	<?php
		if($_POST['first_name']!=""){
			$srh_fname=$_POST['first_name'];
			$fname_whr=" and first_name like'$srh_fname%'";
		}
		if($_POST['last_name']!=""){
			$srh_lname=$_POST['last_name'];
			$lname_whr=" and last_name like'$srh_lname%'";
		}
		if($_POST['RequestTourDateYear']!=""){
			$srh_tour=$_POST['RequestTourDateYear'].'-'.$_POST['RequestTourDateMonth'].'-'.$_POST['RequestTourDateDay'];
			$tour_whr=" and tour_date >='$srh_tour'";
		}
		$sql_get="select * from requests where id>0 $fname_whr $lname_whr $tour_whr";
		$result_get=mysql_query($sql_get);
		$link_nam="requests.php?p=";
		$recordsPerPage = 30;
		require_once "paging.php";
		if(mysql_num_rows($result_get)>0){
		$i=0;
		while($row=mysql_fetch_array($result_get)){
		$i++;
	?>
	<tr>
		<td class="font_10_black"><?php echo $row['id'];?></td>
		<td class="font_10_black"><?php echo $row['first_name'].' '.$row['last_name'];?></td>
		<td class="font_10_black">
		<?php 
			$tour_date_exp=explode('-',$row['tour_date']);
			echo $tour_date_exp[1].'-'.$tour_date_exp[2].'-'.$tour_date_exp[0];
		?>
		</td>
		<td class="font_10_black">
		<a href="requests_edit.php?action=edit&edit_id=<?php echo $row['id']; ?>"><img src="images/edit_link.png" alt="" /></a>			
		</td>
		<td class="font_10_black">
		 <a  href='requests.php?action=del&del_id=<?php echo $row['id']; ?>' onClick="return checkdel();"> <img src="images/deleteIcon.png" border="0" alt="delete"> </a>	
		</td>
	</tr>
	<?php }} ?>
</td>
</tr>
</table>
</div>		
<div align="center" style="padding:10 0px 0 0;">
     <?php if ($maxPage > 1) { echo $first.$prev.$nav.$next.$last;} ?>
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