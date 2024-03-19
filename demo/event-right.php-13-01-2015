<?php
$sql_get="select * from events_pic order by id desc";
$sql_qry=mysql_query($sql_get);
$chk_whr_num=mysql_num_rows($sql_qry);
$img_path_arr=array();
while($fet_row=mysql_fetch_array($sql_qry)){
	$img_path_arr['img'][$fet_row['img_setting']][] = $fet_row['img_path'];
	$img_path_arr['label'][$fet_row['img_setting']][] = $fet_row['img_label'];
	$img_path_arr['id'][$fet_row['img_label']][] = $fet_row['id'];
}
?>
<table width="413" cellspacing="0" cellpadding="0">
  <tr>
    <td style="height:52px;">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" style="background:url(images/event-right.jpg) no-repeat; height:536px;"><table width="98%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" style="height:12px;"></td>
      </tr>
      <tr>
        <td width="38%" align="center" valign="top"><img src="../event/<?php echo $img_path_arr['img']['top_left'][0]; ?>" width="135" height="142" /></td>
        <td width="24%" align="left" valign="top">&nbsp;</td>
        <td width="38%" align="center"><img src="../event/<?php echo $img_path_arr['img']['top_right'][0]; ?>" width="130" height="136" /></td>
      </tr>
      <tr>
        <td height="34" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['top_left'][0]; ?></td>
        <td height="30" align="left" valign="top">&nbsp;</td>
        <td height="30" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['top_right'][0]; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" valign="top"><img src="../event/<?php echo $img_path_arr['img']['center'][0]; ?>" width="135" height="142" /></td>
        </tr>
      <tr>
        <td height="34" colspan="3" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['center'][0]; ?></td>
        </tr>
      <tr>
        <td align="center"><img src="../event/<?php echo $img_path_arr['img']['bottom_left'][0]; ?>" width="130" height="136" /></td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="center" valign="top"><img src="../event/<?php echo $img_path_arr['img']['bottom_right'][0]; ?>" width="135" height="142" /></td>
      </tr>
      <tr>
        <td height="35" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['bottom_left'][0]; ?></td>
        <td height="35" align="left" valign="top">&nbsp;</td>
        <td height="35" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['bottom_right'][0]; ?></td>
      </tr>
      
    </table></td>
  </tr>
  
</table>
