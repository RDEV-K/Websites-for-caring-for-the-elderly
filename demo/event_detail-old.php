<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>St. Joseph Manor (Assisted Living - Affordable - Care - Comfort Compassion Excellence)</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.controlstyle a{ /*links inside DIV sizecontroldiv*/
outline:none;
}

.controlstyle a img{ /*image links inside DIV sizecontroldiv*/
border-width:0;
}

.controlstyle a.selectedcontrol img{ /*selected control's image*/

}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="js/fluidtextresizer.js">

/***********************************************
* Fluid Text Resizer- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>

<script type="text/javascript">

var mytextsizer=new fluidtextresizer({
	controlsdiv: "sizecontroldiv", //id of special div containing your resize controls. Enter "" if not defined
	targets: ["body"], //target elements to resize text within: ["selector1", "selector2", etc]
	levels: 3, //number of levels users can magnify (or shrink) text
	persist: "session", //enter "session" or "none"
	animate: 200 //animation duration of text resize. Enter 0 to disable
})

function emailCheck (emailStr) {
	var sw = true;
	var checkTLD=0;
	var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
	var emailPat=/^(.+)@(.+)$/;
	var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
	var validChars="\[^\\s" + specialChars + "\]";
	var quotedUser="(\"[^\"]*\")";
	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
	var atom=validChars + '+';
	var word="(" + atom + "|" + quotedUser + ")";
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
	var matchArray=emailStr.match(emailPat);
	if (matchArray==null) { sw = false; return sw; }
	var user=matchArray[1];
	var domain=matchArray[2];
	for (i=0; i<user.length; i++) {
		if (user.charCodeAt(i)>127) sw = false;				
	}
	for (i=0; i<domain.length; i++) {
		if (domain.charCodeAt(i)>127) sw = false;
	}
	if (user.match(userPat)==null) sw = false;
	var IPArray=domain.match(ipDomainPat);
	if (IPArray!=null) {
		for (var i=1;i<=4;i++) {
			if (IPArray[i]>255) sw = false;
		}
		return true;
	}
	var atomPat=new RegExp("^" + atom + "$");
	var domArr=domain.split(".");
	var len=domArr.length;
	for (i=0;i<len;i++) {
		if (domArr[i].search(atomPat)==-1) sw = false;
	}
	if (checkTLD && domArr[domArr.length-1].length!=2 && domArr[domArr.length-1].search(knownDomsPat)==-1) sw = false;
	if (len<2) sw = false;
	return sw;
}
function frm_submit(){
	if(document.getElementById('textfield').value==""){
		alert('Please enter the first name.');
		document.getElementById('textfield').focus();
		return false;
	}else if(document.getElementById('textfield2').value==""){
		alert('Please enter the last name.');
		document.getElementById('textfield2').focus();
		return false;
	}else if(document.getElementById('textfield3').value==""){
		alert('Please enter the email address.');
		document.getElementById('textfield3').focus();
		return false;
	}else if(!emailCheck(document.getElementById('textfield3').value)){
		alert('Please enter the correct email address.');
		document.getElementById('textfield3').focus();
		return false;
	}else if(document.getElementById('textfield4').value==""){
		alert('Please enter the phone number.');
		document.getElementById('textfield4').focus();
		return false;
	}else if(document.getElementById('textfield5').value==""){
		alert('Please enter the message.');
		document.getElementById('textfield5').focus();
		return false;
	}else{
		return true;
	}
}
</script>
</head>

<body>
<?php
include_once "db.php";
?>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="topinner"><table width="960" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="header-logo"><a href="index.php" title="St. Joseph Manor (Assisted Living - Affordable Care - Comfort Compassion Excellence)"><img src="images/st-joseph-manor-assisted-li.jpg" width="525" height="107" border="0" /></a></td>
        <td class="header-phone"><table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td class="fontsize"><div id="sizecontroldiv" class="controlstyle">FONT SIZE <span class="bracket">{</span><a href="#fontsize0" class="size2">A</a> <a href="#fontsize1" class="size3">A</a><span class="bracket">}</span> </div></td>
            </tr>
            <tr>
              <td class="fontsize">Phone: (313)-882-3800 | <a href="faqs.php" class="fontsize" title="FAQs">FAQs</a> | <a href="location-map.php" class="fontsize" title="Location">LOCATION</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" class="jquery1"><table width="960" cellspacing="0" cellpadding="0" height="350px;">
            <tr>
              <td align="left" valign="top" class="nav1"><?php include("navigation.php"); ?></td>
              <td valign="bottom" class="tabs"><table width="97%" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="25%" align="center"><a href="request-info.php" title="Request Info"><img src="images/request-info.jpg" width="93" height="93" border="0" /></a></td>
                    <td width="25%" align="center"><a href="refer-a-friend.php" title="Refer A Friend"><img src="images/refer-a-friend.jpg" width="93" height="93" border="0" /></a></td>
                    <td width="25%" align="center"><a href="respite-care.php" title="Respite Care"><img src="images/respite-care.jpg" width="93" height="93" border="0" /></a></td>
                    <td width="25%" align="center"><a href="suites-tour.php" title="Suites Tour"><img src="images/suites-tour.jpg" width="93" height="93" border="0" /></a></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><div align="center" style="padding-top:20px;">
      <table width="960" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="960" align="left" valign="top">
		  	<table width="100%" cellspacing="0" cellpadding="0">
				  <tr>
					<td height="55" align="left" class="title">Events</td>
				  </tr>
            	 <tr>
					  <td align="left"><div align="justify" style="padding-top:2px; line-height:22px;">
							<?php
							if($_REQUEST['id']>0){
								$id=$_REQUEST['id'];
								$whr=" and id='$id'";
							}
							$sql_get="select * from events where active='1' $whr order by id desc limit 0,4";
							$sql_qry=mysql_query($sql_get);
							$chk_whr_num=mysql_num_rows($sql_qry);
							while($fet_row=mysql_fetch_array($sql_qry)){
							?>
							<table width="100%" cellspacing="0" cellpadding="0">
							  <tr>
								<td width="4%" align="left"><img src="images/calendar.png" width="21" height="23" /></td>
								<td width="88%" align="left"><strong><a href="event_detail.php?id=<?php echo $fet_row['id']; ?>" class="bottomtextsmall"><?php echo $fet_row['title']; ?></a></strong></td>
							  </tr>
							  <tr>
								<td colspan="2" align="left">
								<?php 
									$dat_exp=explode('-',$fet_row['event_date']);
									echo date('l, M Y',mktime(0,0,0,$dat_exp[1],$dat_exp[2],$dat_exp[0])); 
								?> at
								<?php 
									$st_exp=explode(':',$fet_row['start_time']);
									 echo date('h:i A',mktime($st_exp[0],$st_exp[1],$st_exp[2],$dat_exp[1],$dat_exp[2],$dat_exp[0])); 
								?> - 
							  <?php 
									$end_exp=explode(':',$fet_row['end_time']);
									echo date('h:i A',mktime($end_exp[0],$end_exp[1],$end_exp[2],$dat_exp[1],$dat_exp[2],$dat_exp[0])); 
								?>							  </tr>
							  <tr>
								<td colspan="2" align="left">
									<?php echo $fet_row['description']; ?>								</td>
							  </tr>
							</table>
							<?php
							}
							?>
							</div>				   </td>
				</tr>
            </table>			</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="bottom" class="bottom"><?php include("bottom.php"); ?></td>
  </tr>
</table>

</body>
</html>
