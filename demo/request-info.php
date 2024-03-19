<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Request Information | Cost-Options | St Joseph Manor</title>

<meta name="description" content="Request information about the best care fit and the assisted living options for your senior family member" />

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
	if(document.getElementById('RequestFirstName').value==""){
		alert('Please enter the first name.');
		document.getElementById('RequestFirstName').focus();
		return false;
	}else if(document.getElementById('RequestLastName').value==""){
		alert('Please enter the last name.');
		document.getElementById('RequestLastName').focus();
		return false;
	}else if(document.getElementById('RequestEmail').value==""){
		alert('Please enter the email address.');
		document.getElementById('RequestEmail').focus();
		return false;
	}else if(!emailCheck(document.getElementById('RequestEmail').value)){
		alert('Please enter the correct email address.');
		document.getElementById('RequestEmail').focus();
		return false;
	}else if(document.getElementById('RequestPhone').value==""){
		alert('Please enter the phone number.');
		document.getElementById('RequestPhone').focus();
		return false;
	}else if(document.getElementById('RequestRelationToResident').value==""){
		alert('Please enter the relation to resident.');
		document.getElementById('RequestRelationToResident').focus();
		return false;
	}else if(document.getElementById('RequestAddress').value==""){
		alert('Please enter the address.');
		document.getElementById('RequestAddress').focus();
		return false;
	}else if(document.getElementById('RequestCity').value==""){
		alert('Please enter the city.');
		document.getElementById('RequestCity').focus();
		return false;
	}else if(document.getElementById('RequestState').value==""){
		alert('Please enter the state.');
		document.getElementById('RequestState').focus();
		return false;
	}else if(document.getElementById('RequestZipcode').value==""){
		alert('Please enter the zipcode.');
		document.getElementById('RequestZipcode').focus();
		return false;
	}else if(document.getElementById('codee').value==""){
		alert("Please fill Security Code");

		return false;
		
	}else if(document.getElementById('codee').value!=""){
		chk_captcha_fun();
	}else{
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
if($_POST['RequestEmail']!=""){
	$st_date=$_POST['RequestDateYear'].'-'.$_POST['RequestDateMonth'].'-'.$_POST['RequestDateDay'];
	$first_name=$_POST['RequestFirstName'];
	$last_name=$_POST['RequestLastName'];
	$email=$_POST['RequestEmail'];
	$phone=$_POST['RequestPhone'];
	$relation_to_resident=$_POST['RequestRelationToResident'];
	$address=$_POST['RequestAddress'];
	$city=$_POST['RequestCity'];
	$state=$_POST['RequestState'];
	$zipcode=$_POST['RequestZipcode'];
	$tour_date=$_POST['RequestTourDateYear'].'-'.$_POST['RequestTourDateMonth'].'-'.$_POST['RequestTourDateDay'];
	$time_of_tour=$_POST['RequestTimeOfTourHour'].':'.$_POST['RequestTimeOfTourMin'].' '.$_POST['RequestTimeOfTourMeridian'];
	$call_back=$_POST['RequestCallBack'];
	$confirm_tour_schedule=$_POST['RequestConfirmTourSchedule'];
	$mail_information=$_POST['RequestMailInformation'];
	
	$resident_name=$_POST['RequestResidentName'];
	$resident_date_of_birth=$_POST['RequestResidentDateOfBirthYear'].'-'.$_POST['RequestResidentDateOfBirthMonth'].'-'.$_POST['RequestResidentDateOfBirthDay'];
	$resident_age=$_POST['RequestResidentAge'];
	$resident_address=$_POST['RequestResidentAddress'];
	$resident_city=$_POST['RequestResidentCity'];
	$resident_state=$_POST['RequestResidentState'];
	$resident_zipcode=$_POST['RequestResidentZipcode'];
	$resident_phone=$_POST['RequestResidentPhone'];
	$monthly_income=$_POST['RequestMonthlyIncome'];
	$veteran=$_POST['RequestVeteran'];
	$resident_lives=$_POST['RequestResidentLives'];
	$resident_has=$_POST['RequestResidentHas'];
	$medication=$_POST['RequestMedication'];
	$bathing=$_POST['RequestBathing'];
	$meals=$_POST['RequestMeals'];
	$transefering=$_POST['RequestTransefering'];
	$continent=$_POST['RequestContinent'];
	$incontinent=$_POST['RequestIncontinent'];
	$walker=$_POST['RequestWalker'];
	$cane=$_POST['RequestCane'];
	$wheel_chair=$_POST['RequestWheelChair'];
	$dressing=$_POST['RequestDressing'];
	$diabetic=$_POST['RequestDiabetic'];
	$insulin_dependent=$_POST['RequestInsulinDependent'];
	$genral_health_info=$_POST['RequestGenralHealthInfo'];
	$internet_search=$_POST['RequestInternetSearch'];
	$friend=$_POST['RequestFriend'];
	$print=$_POST['RequestPrint'];
	$other=$_POST['RequestOther'];
	
	$sql=mysql_query("insert into requests set date='$st_date',first_name='$first_name',last_name='$last_name',phone='$phone',email='$email',
	relation_to_resident='$relation_to_resident',address='$address',city='$city',state='$state',zipcode='$zipcode',tour_date='$tour_date',
	time_of_tour='$time_of_tour',call_back='$call_back',confirm_tour_schedule='$confirm_tour_schedule',mail_information='$mail_information',
	resident_name='$resident_name',resident_date_of_birth='$resident_date_of_birth',resident_age='$resident_age',resident_address='$resident_address',
	resident_city='$resident_city',resident_state='$resident_state',resident_zipcode='$resident_zipcode',resident_phone='$resident_phone',
	monthly_income='$monthly_income',veteran='$veteran',resident_lives='$resident_lives',resident_has='$resident_has',medication='$medication',
	bathing='$bathing',meals='$meals',transefering='$transefering',continent='$continent',incontinent='$incontinent',walker='$walker',cane='$cane',
	wheel_chair='$wheel_chair',dressing='$dressing',diabetic='$diabetic',insulin_dependent='$insulin_dependent',genral_health_info='$genral_health_info',
	internet_search='$internet_search',friend='$friend',print='$print',other='$other'");
	
	$message2="You have a new lead.";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: info@stjosephmanor.com' . "\r\n" .

    'Reply-To: info@stjosephmanor.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();
	
	@mail($email, "Request Form", $message2, $headers);
	
	echo "<script>window.location.href='request-info.php'</script>";
}
?>
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="topinner"><table width="960" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="header-logo"><a href="index.php" title="St. Joseph Manor (Assisted Living - Affordable Care - Comfort Compassion Excellence)"><img src="images/st-joseph-manor-assisted-li.jpg" width="525" height="107" border="0" /></a></td>
        <td class="header-phone"><table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td class="fontsize"><div id="sizecontroldiv" class="controlstyle">FONT SIZE <span class="bracket">{</span> <a href="#fontsize0" class="size2">A</a> <a href="#fontsize1" class="size3">A</a><span class="bracket">}</span> </div></td>
            </tr>
            <tr>
              <td class="fontsize">Phone: (313)-882-3800 | <a href="faqs.php" class="fontsize" title="FAQs">FAQs</a> | <a href="location-map.php" class="fontsize" title="Location">LOCATION</a></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" class="jquery2"><table width="960" cellspacing="0" cellpadding="0" height="350px;">
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
                <td height="45" align="left" class="title">Request Info </td>
              </tr>
            <tr>
              <td>Thank you for you interest in St. Joseph Manor.<br />
                <br />                
                Get more information about St. Joseph Manor HFA.<br />
                <br />
                Please fill out the form below and click &quot;Submit&quot;. We will get back to you as soon as possible.
                <br /><br />                
                In the message box please include you Street Address, City, State and Zip Code.<br />
                <br />
                List if you are interested in a Suite (Bed Room, Bath and Living Room)<br />
                or&nbsp;<br />
                Studio (Bed Room and Bath)
                <br /><br />
                Please make sure that you include the date you would like to move in as well. <br />
                <br />
              </td>
              </tr>
            <tr>
              <td class="text"><table width="100%" cellspacing="0" cellpadding="0">
               <form controller="requests" class="RequestAddForm form-horizontal" onsubmit="return frm_submit();" id="RequestAddForm" method="post" action="#" name="frm_req" accept-charset="utf-8">
			   <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
				<hr>
				<h4>General Information</h4>
				<hr>
				
				<div class='control-group'>
					<label class="control-label">Date</label>
					<div class="controls"><select name="RequestDateDay" twoDigitDay="1" class="span1" id="RequestDateDay">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27" selected="selected">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>-<select name="RequestDateMonth" twoDigitDay="1" class="span1" id="RequestDateMonth">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05" selected="selected">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>-<select name="RequestDateYear" twoDigitDay="1" class="span1" id="RequestDateYear">
				<option value="2022">2022</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012" selected="selected">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
				<option value="1979">1979</option>
				<option value="1978">1978</option>
				<option value="1977">1977</option>
				<option value="1976">1976</option>
				<option value="1975">1975</option>
				<option value="1974">1974</option>
				<option value="1973">1973</option>
				<option value="1972">1972</option>
				<option value="1971">1971</option>
				<option value="1970">1970</option>
				<option value="1969">1969</option>
				<option value="1968">1968</option>
				<option value="1967">1967</option>
				<option value="1966">1966</option>
				<option value="1965">1965</option>
				<option value="1964">1964</option>
				<option value="1963">1963</option>
				<option value="1962">1962</option>
				<option value="1961">1961</option>
				<option value="1960">1960</option>
				<option value="1959">1959</option>
				<option value="1958">1958</option>
				<option value="1957">1957</option>
				<option value="1956">1956</option>
				<option value="1955">1955</option>
				<option value="1954">1954</option>
				<option value="1953">1953</option>
				<option value="1952">1952</option>
				<option value="1951">1951</option>
				<option value="1950">1950</option>
				<option value="1949">1949</option>
				<option value="1948">1948</option>
				<option value="1947">1947</option>
				<option value="1946">1946</option>
				<option value="1945">1945</option>
				<option value="1944">1944</option>
				<option value="1943">1943</option>
				<option value="1942">1942</option>
				<option value="1941">1941</option>
				<option value="1940">1940</option>
				<option value="1939">1939</option>
				<option value="1938">1938</option>
				<option value="1937">1937</option>
				<option value="1936">1936</option>
				<option value="1935">1935</option>
				<option value="1934">1934</option>
				<option value="1933">1933</option>
				<option value="1932">1932</option>
				<option value="1931">1931</option>
				<option value="1930">1930</option>
				<option value="1929">1929</option>
				<option value="1928">1928</option>
				<option value="1927">1927</option>
				<option value="1926">1926</option>
				<option value="1925">1925</option>
				<option value="1924">1924</option>
				<option value="1923">1923</option>
				<option value="1922">1922</option>
				<option value="1921">1921</option>
				<option value="1920">1920</option>
				<option value="1919">1919</option>
				<option value="1918">1918</option>
				<option value="1917">1917</option>
				<option value="1916">1916</option>
				<option value="1915">1915</option>
				<option value="1914">1914</option>
				<option value="1913">1913</option>
				<option value="1912">1912</option>
				</select></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">First Name</label>
					<div class="controls"><input name="RequestFirstName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" id="RequestFirstName" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Last Name</label>
					<div class="controls"><input name="RequestLastName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" id="RequestLastName" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Email</label>
					<div class="controls"><input name="RequestEmail" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty validEmail" maxlength="255" id="RequestEmail" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Phone</label>
					<div class="controls"><input name="RequestPhone" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty numeric" maxlength="255" id="RequestPhone" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Relation To Resident</label>
					<div class="controls"><input name="RequestRelationToResident" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" id="RequestRelationToResident" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Address</label>
					<div class="controls"><textarea name="RequestAddress" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty span5" cols="30" rows="6" id="RequestAddress" ></textarea></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">City</label>
					<div class="controls"><input name="RequestCity" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" id="RequestCity" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">State</label>
					<div class="controls"><input name="RequestState" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" id="RequestState" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Zipcode</label>
					<div class="controls"><input name="RequestZipcode" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="256" id="RequestZipcode" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Tour Date</label>
					<div class="controls"><select name="RequestTourDateDay" twoDigitDay="1" class="span1" id="RequestTourDateDay">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27" selected="selected">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>-<select name="RequestTourDateMonth" twoDigitDay="1" class="span1" id="RequestTourDateMonth">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05" selected="selected">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>-<select name="RequestTourDateYear" twoDigitDay="1" class="span1" id="RequestTourDateYear">
				<option value="2022">2022</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012" selected="selected">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
				<option value="1979">1979</option>
				<option value="1978">1978</option>
				<option value="1977">1977</option>
				<option value="1976">1976</option>
				<option value="1975">1975</option>
				<option value="1974">1974</option>
				<option value="1973">1973</option>
				<option value="1972">1972</option>
				<option value="1971">1971</option>
				<option value="1970">1970</option>
				<option value="1969">1969</option>
				<option value="1968">1968</option>
				<option value="1967">1967</option>
				<option value="1966">1966</option>
				<option value="1965">1965</option>
				<option value="1964">1964</option>
				<option value="1963">1963</option>
				<option value="1962">1962</option>
				<option value="1961">1961</option>
				<option value="1960">1960</option>
				<option value="1959">1959</option>
				<option value="1958">1958</option>
				<option value="1957">1957</option>
				<option value="1956">1956</option>
				<option value="1955">1955</option>
				<option value="1954">1954</option>
				<option value="1953">1953</option>
				<option value="1952">1952</option>
				<option value="1951">1951</option>
				<option value="1950">1950</option>
				<option value="1949">1949</option>
				<option value="1948">1948</option>
				<option value="1947">1947</option>
				<option value="1946">1946</option>
				<option value="1945">1945</option>
				<option value="1944">1944</option>
				<option value="1943">1943</option>
				<option value="1942">1942</option>
				<option value="1941">1941</option>
				<option value="1940">1940</option>
				<option value="1939">1939</option>
				<option value="1938">1938</option>
				<option value="1937">1937</option>
				<option value="1936">1936</option>
				<option value="1935">1935</option>
				<option value="1934">1934</option>
				<option value="1933">1933</option>
				<option value="1932">1932</option>
				<option value="1931">1931</option>
				<option value="1930">1930</option>
				<option value="1929">1929</option>
				<option value="1928">1928</option>
				<option value="1927">1927</option>
				<option value="1926">1926</option>
				<option value="1925">1925</option>
				<option value="1924">1924</option>
				<option value="1923">1923</option>
				<option value="1922">1922</option>
				<option value="1921">1921</option>
				<option value="1920">1920</option>
				<option value="1919">1919</option>
				<option value="1918">1918</option>
				<option value="1917">1917</option>
				<option value="1916">1916</option>
				<option value="1915">1915</option>
				<option value="1914">1914</option>
				<option value="1913">1913</option>
				<option value="1912">1912</option>
				</select></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Time of Tour</label>
					<div class="controls"><select name="RequestTimeOfTourHour" twoDigitDay="1" class="span1" id="RequestTimeOfTourHour">
				<option value="01">1</option>
				<option value="02">2</option>
				<option value="03">3</option>
				<option value="04">4</option>
				<option value="05">5</option>
				<option value="06" selected="selected">6</option>
				<option value="07">7</option>
				<option value="08">8</option>
				<option value="09">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>:<select name="RequestTimeOfTourMin" twoDigitDay="1" class="span1" id="RequestTimeOfTourMin">
				<option value="00">00</option>
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18" selected="selected">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
				</select> <select name="RequestTimeOfTourMeridian" twoDigitDay="1" class="span1" id="RequestTimeOfTourMeridian">
				<option value="am" selected="selected">am</option>
				<option value="pm">pm</option>
				</select></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Request Response</label>
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox" name="RequestCallBack" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestCallBack" />			Call Back
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestConfirmTourSchedule" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestConfirmTourSchedule" />			Confirm tour schedule
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestMailInformation" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestMailInformation" />			Mail information
						</label>
					</div>
				</div>
				
				<hr>
				<h4>Resident Information</h4>
				<hr>
				
				<div class="control-group">
					<label class="control-label">Name</label>
					<div class="controls"><input name="RequestResidentName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" id="RequestResidentName" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Date of Birth</label>
					<div class="controls"><select name="RequestResidentDateOfBirthDay" twoDigitDay="1" class="notEmpty span1" id="RequestResidentDateOfBirthDay">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27" selected="selected">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>-<select name="RequestResidentDateOfBirthMonth" twoDigitDay="1" class="notEmpty span1" id="RequestResidentDateOfBirthMonth">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05" selected="selected">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>-<select name="RequestResidentDateOfBirthYear" twoDigitDay="1" class="notEmpty span1" id="RequestResidentDateOfBirthYear">
				<option value="2022">2022</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012" selected="selected">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
				<option value="1979">1979</option>
				<option value="1978">1978</option>
				<option value="1977">1977</option>
				<option value="1976">1976</option>
				<option value="1975">1975</option>
				<option value="1974">1974</option>
				<option value="1973">1973</option>
				<option value="1972">1972</option>
				<option value="1971">1971</option>
				<option value="1970">1970</option>
				<option value="1969">1969</option>
				<option value="1968">1968</option>
				<option value="1967">1967</option>
				<option value="1966">1966</option>
				<option value="1965">1965</option>
				<option value="1964">1964</option>
				<option value="1963">1963</option>
				<option value="1962">1962</option>
				<option value="1961">1961</option>
				<option value="1960">1960</option>
				<option value="1959">1959</option>
				<option value="1958">1958</option>
				<option value="1957">1957</option>
				<option value="1956">1956</option>
				<option value="1955">1955</option>
				<option value="1954">1954</option>
				<option value="1953">1953</option>
				<option value="1952">1952</option>
				<option value="1951">1951</option>
				<option value="1950">1950</option>
				<option value="1949">1949</option>
				<option value="1948">1948</option>
				<option value="1947">1947</option>
				<option value="1946">1946</option>
				<option value="1945">1945</option>
				<option value="1944">1944</option>
				<option value="1943">1943</option>
				<option value="1942">1942</option>
				<option value="1941">1941</option>
				<option value="1940">1940</option>
				<option value="1939">1939</option>
				<option value="1938">1938</option>
				<option value="1937">1937</option>
				<option value="1936">1936</option>
				<option value="1935">1935</option>
				<option value="1934">1934</option>
				<option value="1933">1933</option>
				<option value="1932">1932</option>
				<option value="1931">1931</option>
				<option value="1930">1930</option>
				<option value="1929">1929</option>
				<option value="1928">1928</option>
				<option value="1927">1927</option>
				<option value="1926">1926</option>
				<option value="1925">1925</option>
				<option value="1924">1924</option>
				<option value="1923">1923</option>
				<option value="1922">1922</option>
				<option value="1921">1921</option>
				<option value="1920">1920</option>
				<option value="1919">1919</option>
				<option value="1918">1918</option>
				<option value="1917">1917</option>
				<option value="1916">1916</option>
				<option value="1915">1915</option>
				<option value="1914">1914</option>
				<option value="1913">1913</option>
				<option value="1912">1912</option>
				</select></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Age</label>
					<div class="controls"><input name="RequestResidentAge" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="11" id="RequestResidentAge" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Address</label>
					<div class="controls"><input name="RequestResidentAddress" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="span5" maxlength="255" id="RequestResidentAddress" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">City</label>
					<div class="controls"><input name="RequestResidentCity" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" id="RequestResidentCity" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">State</label>
					<div class="controls"><input name="RequestResidentState" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" id="RequestResidentState" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Zipcode</label>
					<div class="controls"><input name="RequestResidentZipcode" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="256" id="RequestResidentZipcode" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Phone</label>
					<div class="controls"><input name="RequestResidentPhone" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" id="RequestResidentPhone" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Monthly Income</label>
					<div class="controls"><input name="RequestMonthlyIncome" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="11" id="RequestMonthlyIncome" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Veteran</label>
					<div class="controls"><input name="RequestVeteran" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" id="RequestVeteran" /></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Resident Lives</label>
					<div class="controls">
						<select name="RequestResidentLives" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentLives">
				<option value="">-Select-</option>
				<option value="0">Family</option>
				<option value="1">Facility</option>
				<option value="2">Hospital</option>
				<option value="3">Independent</option>
				</select>	</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Resident Has</label>
					<div class="controls">
						<select name="RequestResidentHas" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentHas">
				<option value="">-Select-</option>
				<option value="0">Medicare</option>
				<option value="1">Medicaid</option>
				<option value="2">Other Insurance</option>
				</select>	</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">Needs assistance with</label>
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox" name="RequestMedication" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestMedication" />			Medication
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestBathing" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestBathing" />			Bathing
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestMeals" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestMeals" />			Meals
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestTransefering" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestTransefering" /> 
							Transferring
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestContinent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestContinent" />			Continent
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestIncontinent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestIncontinent" />			Incontinent
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestTransefering" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestTransefering" />			Transferring
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestWalker" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestWalker" />			Walker
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestCane" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestCane" />			Cane
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestWheelChair" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestWheelChair" />			Wheel Chair
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestDressing" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestDressing" />			Dressing
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestDiabetic" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestDiabetic" />			Diabetic
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestInsulinDependent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestInsulinDependent" />			Insulin Dependent
						</label>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">General Health Info</label>
					<div class="controls"><textarea name="RequestGenralHealthInfo" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="span5" cols="30" rows="6" id="RequestGenralHealthInfo" ></textarea></div>
				</div>
				
				<div class="control-group">
					<label class="control-label">How did you hear about us</label>
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox" name="RequestInternetSearch" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestInternetSearch" />			Internet Search
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestFriend" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestFriend" />			Friend
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestPrint" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestPrint" />			Print
						</label>
						<label class="checkbox">
							<input type="checkbox" name="RequestOther" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestOther" />			Other
						</label>
					</div>
				</div>
				
				<div class="control-group">
					
					<strong>Please enter the numbers and alphabets as you see them.</strong>
				</div>

				
				<div class="control-group">
					
					<div class="controls"><input align="left" id="codee" name="codee" type="text" size="30"/></div>
				</div>
				
				
				<div style="padding-top:20px; float:left;" class="control-group">
					<div class="controls">
			<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" name="captchaimg" align="left" id='captchaimg' />	</div>
				</div>
				<br/>
					<br/>
				<div class="control-group">
					<div class="controls">
						<small style="font-size:15px;">Can't read the image? click <a href='javascript: refreshCaptcha();' style="color:#000">here</a> to refresh</small>	</div>
				</div>

				<div style="padding-top:20px;" class="control-group">
					<div class="controls">
						<ul class="but_bg_img" onClick="frm_submit();">
																	<li class="left">&nbsp;</li>
																	<li class="center" style="width:211px;"><span>SUBMIT</span></li>
																	<li class="right">&nbsp;</li>
						  </ul>	</div>
				</div>
				
				<!--<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary">Submit</button>	</div>
				</div>-->
				</form>
              </table></td>
            </tr>
            </table></td>
            <td width="309" align="center" valign="top"><?php include("request-right.php"); ?></td>
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