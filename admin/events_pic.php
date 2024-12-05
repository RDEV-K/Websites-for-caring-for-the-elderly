<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
if($_REQUEST['del_id']>0){
	$del_id=$_REQUEST['del_id'];
	mysql_query("delete from events_pic where id='$del_id'");
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
		The event picture has been saved.
	</td>
</tr>
<?php } ?>
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
<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="font_11_black">ID</th>
		<th class="font_11_black">Label</th>
		<th class="font_11_black">Image</th>
		<th class="font_11_black">Positions</th>
		<th class="font_11_black">Edit</th>
		<th class="font_11_black">Delete</th>
	</tr>
	<?php
		$sql_get="select * from events_pic";
		$result_get=mysql_query($sql_get);
		$link_nam="events_pic.php?p=";
		$recordsPerPage = 30;
		require_once "paging.php";
		if(mysql_num_rows($result_get)>0){
		$i=0;
		while($row=mysql_fetch_array($result_get)){
		$i++;
	?>
	<tr>
		<td class="font_10_black"><?php echo $row['id'];?></td>
		<td class="font_10_black"><?php echo $row['img_label'];?></td>
		<td class="font_10_black"><img src="../event/<?php echo $row['img_path']; ?>" width="50" height="50" /></td>
		<td class="font_10_black">
			<?php 
				if($row['img_setting']=="top_left"){echo"Top Left";}
				if($row['img_setting']=="top_right"){echo"Top Right";}
				if($row['img_setting']=="center"){echo"Center";}
				if($row['img_setting']=="bottom_left"){echo"Bottom Left";}
				if($row['img_setting']=="bottom_right"){echo"Bottom Right";}
			?>
		</td>
		<td class="font_10_black">
			<a href="events_pic_edit.php?action=edit&edit_id=<?php echo $row['id']; ?>"><img src="images/edit_link.png" alt="" /></a>			
		</td>
		<td class="font_10_black">
		 <a  href='events_pic.php?action=del&del_id=<?php echo $row['id']; ?>' onClick="return checkdel();"> <img src="images/deleteIcon.png" border="0" alt="delete"> </a>	
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