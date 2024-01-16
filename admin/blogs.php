<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
if($_REQUEST['del_id']>0){
	$del_id=$_REQUEST['del_id'];
	mysql_query("delete from blogs where id='$del_id'");
}
if($_REQUEST['stat_id']>0){
	$stat_id=$_REQUEST['stat_id'];
	if($_REQUEST['active']==1){
		$active_st=0;
	}else{
		$active_st=1;
	}
	
	mysql_query("update blogs set active='$active_st' where id='$stat_id'");
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
		The testimonials has been saved.
	</td>
</tr>
<?php } ?>
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
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="blogs.php" accept-charset="utf-8">	
	<table class="search_option_table">
		<tr>
			<th colspan="3" class="font_11_black">
				Search
			</th>
		</tr>
		<tr>
			<td width='200px' class="font_11_black">
				Search By Title :
			</td>
			<td width='200px'>
				<div class="input text"><input name="title" type="text" maxlength="255" id="title" /></div>			
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
		<th class="font_11_black">Title</th>
		<th class="font_11_black">Event Date</th>
		<th class="font_11_black">Active</th>
		<th class="font_11_black">Edit</th>
		<th class="font_11_black">Delete</th>
	</tr>
	<?php
		if($_POST['title']!=""){
			$srh_title=$_POST['title'];
			$title_whr=" and title like'$srh_title%'";
		}
		$sql_get="select * from blogs where id>0 $title_whr";
		$result_get=mysql_query($sql_get);
		$link_nam="blogs.php?p=";
		$recordsPerPage = 30;
		require_once "paging.php";
		if(mysql_num_rows($result_get)>0){
		$i=0;
		while($row=mysql_fetch_array($result_get)){
		$i++;
	?>
	<tr>
		<td class="font_10_black"><?php echo $row['id'];?></td>
		<td class="font_10_black"><?php echo $row['title'];?></td>
		<td class="font_10_black"><?php echo $row['date'];?></td>
		<td class="font_10_black">
		 <a  href='blogs.php?stat_id=<?php echo $row['id']; ?>&active=<?php echo $row['active']; ?>'>
			<?php if($row['active']=="1"){
			?>
				<img src="images/active.png" class="table_imgs" alt="" />
			<?php }else{?>
				<img src="images/cross.png" class="table_imgs" alt="" />
			<?php }?>
		 </a>	
		</td>
		<td class="font_10_black">
			<a href="blogs_edit.php?action=edit&edit_id=<?php echo $row['id']; ?>"><img src="images/edit_link.png" alt="" /></a>			
		</td>
		<td class="font_10_black">
		 <a  href='blogs.php?action=del&del_id=<?php echo $row['id']; ?>' onClick="return checkdel();"> <img src="images/deleteIcon.png" border="0" alt="delete"> </a>	
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