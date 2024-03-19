<script type="text/javascript">
function call_frm_sub(){
	if(document.call_frm.firstname.value=="" || document.getElementById('firstname').value=="First Name"){
		document.call_frm.firstname.focus();
		alert("Please enter the first name");
		return false;
	}else if(document.call_frm.lastname.value=="" || document.getElementById('lastname').value=="Last Name"){
		document.call_frm.lastname.focus();
		alert("Please enter the last name");
		return false;
	}else if(document.call_frm.phone1.value=="" || document.getElementById('phone1').value=="111"){
		document.call_frm.phone1.focus();
		alert("Please enter the phone number");
		return false;
	}else if(document.call_frm.phone2.value=="" || document.getElementById('phone2').value=="111"){
		document.call_frm.phone2.focus();
		alert("Please enter the phone number");
		return false;
	}else if(document.call_frm.phone3.value=="" || document.getElementById('phone3').value=="1111"){
		document.call_frm.phone3.focus();
		alert("Please enter the phone number");
		return false;
	}else{
		document.call_frm.submit();
	}
}
function blank_val(id){
	if(document.getElementById('firstname').value=="First Name" && id=="firstname"){
		document.getElementById('firstname').value="";
	}
	if(document.getElementById('lastname').value=="Last Name" && id=="lastname"){
		document.getElementById('lastname').value="";
	}
	if(document.getElementById('phone1').value=="111" && id=="phone1"){
		document.getElementById('phone1').value="";
	}
	if(document.getElementById('phone2').value=="111" && id=="phone2"){
		document.getElementById('phone2').value="";
	}
	if(document.getElementById('phone3').value=="1111" && id=="phone3"){
		document.getElementById('phone3').value="";
	}
}
</script>
<form action="sjm_call_send.php" name="call_frm" method="post">
<table width="230" cellspacing="0" cellpadding="0">
  <tr>
    <td height="45" colspan="2" align="center"><img src="images/we-can-call-you.jpg" alt="We Can Call You" title="We Can Call You" width="174" height="19" /></td>
  </tr>
  <tr>
    <td width="50%" height="30" align="left"><label>
      <input name="firstname" type="text" id="firstname"  onclick="blank_val('firstname');" value="First Name" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px;" size="20" />
      </label>    </td>
    <td width="50%" height="30" align="right"><input name="lastname" type="text" id="lastname"  value="Last Name" onclick="blank_val('lastname');" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px;" size="20" /></td>
  </tr>
  <tr>
    <td colspan="2" style="height:8px;"></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><table width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td width="26%"><input name="phone1" type="text" id="phone1" onclick="blank_val('phone1');" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px;" value="111" size="8" /></td>
        <td width="25%" align="left"><input name="phone2" type="text" id="phone2"  onclick="blank_val('phone2');" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px;" value="111" size="8" /></td>
        <td width="49%" align="right"><input name="phone3" type="text" id="phone3"  onclick="blank_val('phone3');" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px;" value="1111" size="20" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" style="height:8px;"></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><table width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td width="23%" align="left"><label>
          <select  name="time_frm" id="time_frm" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; width:50px; height:23px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          </label>        </td>
        <td width="21%" align="left"><select name="time_frm1" id="time_frm1" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px; width:50px;">
          <option value="AM">AM</option>
          <option value="PM">PM</option>
        </select></td>
        <td width="8%" align="center" class="textblack">To</td>
        <td width="25%" align="left"><select name="time_to" id="time_to" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px; width:50px;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select></td>
        <td width="23%" align="left"><select name="time_to1" id="time_to1" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; height:23px; width:50px;">
          <option value="AM">AM</option>
          <option value="PM">PM</option>
        </select></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="45" colspan="2" align="center"> 
      <img src="securimage/securimage_show.php?sid=<?php echo md5(time()) ?>" name="siimage" id="siimage" style="padding-right: 5px; border: 0" />
      <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onClick="document.getElementById('siimage').src = 'securimage/securimage_show.php?sid=' + Math.random(); return false"><img src="securimage/images/refresh.gif" alt="Reload Image" border="0" onClick="this.blur()" align="bottom" /></a>
      <div style="clear: both"></div>			 
<input name="codee" type="text" size="8" value="Enter above code" style="font-family: 'Trebuchet MS'; font-size:12px; color:#535353; border:solid thin #cfcfcf; width:110px; height:23px;"></td></tr>
  <tr>
    <td height="40" colspan="2" align="center" valign="bottom"><a href="#" onClick="return call_frm_sub();"><img src="images/call-me.jpg" alt="(313)-882-3800" title="(313)-882-3800" width="115" height="32" border="0" /></a></td>
  </tr>
</table>
</form>