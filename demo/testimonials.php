<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>St Joseph Manor Senior Assisted Living | Testimonials</title>

<meta name="description" content="Read testimonials from happy family members about our assisted living care facilities." />

<meta name="keywords" content="assisted living detroit, assisted living detroit mi, assisted living facilities in detroit Michigan, assisted living in detroit, assisted living in michigan, assisted living livonia mi, assisted living michigan, assisted living rochester mi, detroit assisted living, michigan senior housing, michigan senior living, senior living michigan, sterling heights assisted living, assisted living gross pointe, michigan assisted living, best assisted living facilities, assisted senior living facilities, senior assisted living, assisted living costs" />

<meta http-equiv="Content-Style-Type" content="text/css" />

<meta name="robots" content="index, follow" />

<meta name="revisit-after" content="3 days" />

<meta name="AUTHOR" content="St. Joseph Manor (Assisted Living - Affordable - Care - Comfort Compassion Excellence)" /> 

<meta name="HOME_URL" content="http://www.stjosephmanor.com/" />

<meta content="ALL" name="robots" />

<meta name="category" content="Assisted Living" />

<meta name="classification" content="Assisted Living Detroit MI" />

<meta name="COPYRIGHT" content=" St. Joseph Manor (Assisted Living - Affordable - Care - Comfort Compassion Excellence)" />

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
          <td width="651" align="left" valign="top">
		  	<table width="96%" cellspacing="0" cellpadding="0">
			  <tr>
				<td height="55" align="left" class="title"><table width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Testimonials</td>
                    <td style="padding-left:281px;"><a href="submit-testimonials.php" title="Submit Testimonial"><img src="images/submit-testimonial-button.jpg" width="160" height="24" border="0" /></a></td>
                  </tr>
                </table></td>
			  </tr>
			 <tr>
				  <td align="left"><div align="justify" style="padding-top:2px; line-height:22px;">
				    <table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="100%">
								<table cellpadding="10" cellspacing="0" width="100%">
									<tr>
										<td align="left" class="bottom_text"><div align="justify" style="padding-top:2px; line-height:22px;">
						<?php
						if($_POST['month']<>""){
							$srh_month=$_POST['month'];
							$srh_year=$_POST['year'];
							$dat_exp=explode('-',$srh_dat);
							$cur_start_dat1=$srh_year.'-'.$srh_month.'-'.'01';
							$cur_end_dat1=$srh_year.'-'.$srh_month.'-'.'31';
							$whr_dat=" and date between '$cur_start_dat1' and '$cur_end_dat1'";
						}
						if($whr_dat<>""){
							$sql_get="select * from  testimonials where active='1' $whr_dat order by id desc";
							$sql_qry=mysql_query($sql_get);
							$chk_whr_num=mysql_num_rows($sql_qry);
						}else{
							$chk_whr_num=0;
						}	
						if($chk_whr_num==0){
							$sql_get1="select date from  testimonials where active='1' order by date desc";
							$sql_qry1=mysql_query($sql_get1);
							$fet_rec=mysql_fetch_array($sql_qry1);
							$blg_dat=$fet_rec['date'];
							$blg_dat_exp=explode('-',$blg_dat);
							$blg_mm_yy=$blg_dat_exp[0].'-'.$blg_dat_exp[1].'-';
						
							//comment fro some time latest blogs shown
							$sql_get="select * from  testimonials where active='1' order by id desc";
							$sql_qry=mysql_query($sql_get);
							$chk_whr_num=mysql_num_rows($sql_qry);
						}
						while($fet_row=mysql_fetch_array($sql_qry)){
						?>
						<!--<table cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="100%">&nbsp;</td>
						</tr>
						<tr><td height="20">&nbsp;</td></tr>
					</table>-->
						<div class="box">
						<b><?php  echo $fet_row['f_name'].' '.$fet_row['l_name']; ?> says:</b><br />
						<?php  echo $fet_row['date']; ?><br />
						<p><?php echo $fet_row['msg']; ?></p>					</div><br />
						<?php
						}
						?>
						</div>			</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr><td height="20">&nbsp;</td></tr>
					</table>
						</div>
					</td>
				</tr>
            </table>
			</td>
            <td width="309" align="center" valign="top"><?php include("right.php"); ?></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
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
