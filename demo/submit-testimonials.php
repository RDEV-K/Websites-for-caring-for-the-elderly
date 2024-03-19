<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Testimonials | St Joseph Manor Senior Assisted Living</title>

<meta name="description" content="Send us a note here or call to know more about our facility for senior assisted living." />

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


function chk_captcha_fun(){
		var xmlHttp;
		try{ 
			// Firefox, Opera 8.0+, Safari 
			xmlHttp=new XMLHttpRequest();
		}
		catch (e){
			// Internet Explorer  
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					top.showWarningFancyAlert("Your browser does not support AJAX!");
					return false;
				}
			}
		}
		xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			var v = xmlHttp.responseText;
			if(v==document.frm_req.codee.value && v!=""){
				document.frm_req.submit();
			}else{
				alert("Please fill Correct Security Code");
	
				return false;
			}
		}
	}
	
	xmlHttp.open("GET","chk_captcha_code.php",true);
	xmlHttp.send(null);
}









function frm_submit(){

var sess_captcha_val="";

	if(document.getElementById('textfield').value==""){
		alert('Please enter the first name.');
		document.getElementById('textfield').focus();
		return false;
	}
	else if(document.getElementById('textfield2').value==""){
		alert('Please enter the last name.');
		document.getElementById('textfield2').focus();
		return false;
	}
	/*else if(document.getElementById('textfield3').value==""){
		alert('Please enter the email address.');
		document.getElementById('textfield3').focus();
		return false;
	}*/
	//else if(!emailCheck(document.getElementById('textfield3').value)){
//		alert('Please enter the correct email address.');
//		document.getElementById('textfield3').focus();
//		return false;
//	}
	//else if(document.getElementById('textfield4').value==""){
//		alert('Please enter the phone number.');
//		document.getElementById('textfield4').focus();
//		return false;
//	}
	else if(document.getElementById('textfield5').value==""){
		alert('Please enter the message.');
		document.getElementById('textfield5').focus();
		return false;
	}
	else if(document.getElementById('codee').value==""){
		alert("Please fill Security Code");

		return false;
		
	}else if(document.getElementById('codee').value!=""){
		chk_captcha_fun();
	}	
	else{
		return true;
	}
}
</script>


<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>


</head>

<body>
<?php
include_once "db.php";
if($_POST['textfield']!=""){
	$first_name=$_POST['textfield'];
	$last_name=$_POST['textfield2'];
	$email=$_POST['textfield3'];
	$phone_number=$_POST['textfield4'];
	$message=$_POST['textfield5'];
	$curTime = date("Y-m-d h:i:s");
	$sql=mysql_query("insert into testimonials set f_name='$first_name',l_name='$last_name',email='$email',phone_no='$phone_number',date='$curTime',msg='$message'");
	
	$message="You have a new lead.";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: info@stjosephmanor.com' . "\r\n" .

    'Reply-To: info@stjosephmanor.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();
	
	@mail($email, "Testimonial Form", $message, $headers);
	
	echo "<script>window.location.href='submit-testimonials.php'</script>";
}
?>
<form action="#" method="post" name="frm_req" onsubmit="return frm_submit();">
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
          <td width="651" align="left" valign="top"><table width="96%" cellspacing="0" cellpadding="0">
              <tr>
                <td height="45" align="left" class="title">Submit Testimonial</td>
              </tr>
            
			  <tr>
              <td class="text"><table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="2" align="left"><strong> *&nbsp;First name (required): </strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">
                    <label>
                      <input name="textfield" id="textfield" type="text" size="80" />
                      </label>                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><strong> *&nbsp;Last name (required): </strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><input name="textfield2" id="textfield2" type="text" size="80" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><strong>E-mail address : </strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><input name="textfield3" id="textfield3" type="text" size="80" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><strong>Phone number :</strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><input name="textfield4" id="textfield4" type="text" size="80" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><strong> *&nbsp;Message (required): </strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">
                    <label>
                      <textarea name="textfield5" id="textfield5" cols="62" rows="5"></textarea>
                      </label>                  </td>
                </tr>
               <!--  <tr>
                  <td align="left"> 
                    <label>
                      <input type="checkbox" name="checkbox" value="checkbox" />
                      </label>
            
                    I want to receive newsletters, updates, and special offers </td>
                </tr> -->
                <tr>
                  <td height="35" colspan="2" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="35" colspan="2" align="left"><strong>Please enter the numbers and alphabets as you see them.</strong></td>
                </tr>
                <tr>
                  <td height="35" colspan="2" align="left">
                    <label></label></td>
                </tr>
                <tr>
                  <td width="18%" align="left"><span class="txt_label"><img src="captcha_code_file.php?rand=<?php echo rand(); ?>" name="captchaimg" align="right" id='captchaimg' /></span></td>
                  <td width="82%" align="left"><span class="txt_label">
                    <input align="left" id="codee" name="codee" type="text" size="61"/>
                  </span></td>
                </tr>
                <tr>
                  <td height="40" colspan="2" align="left"><small style="font-size:15px;">Can't read the image? click <a href='javascript: refreshCaptcha();' style="color:#000">here</a> to refresh</small></td>
                  </tr>
                
                
                <tr>
                  <td colspan="2" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><!--<input type="submit" name="Submit" value="Submit" />-->                    <ul class="but_bg_img" onClick="frm_submit();">
																	<li class="left">&nbsp;</li>
																	<li class="center" style="width:211px;"><span>SUBMIT</span></li>
																	<li class="right">&nbsp;</li>
						  </ul></td>
                  </tr>
                
                <tr>
                  <td height="30" colspan="2" align="left"><strong>St Joseph Manor will not contact you or share your contact information with anyone.</strong></td>
                  </tr>
              </table></td>
            </tr>
            </table></td>
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
</form>
</body>
</html>