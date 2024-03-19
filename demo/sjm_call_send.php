<?php
include_once "db.php";
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$phone3=$_POST['phone3'];
$final_phone=$phone1.'-'.$phone2.'-'.$phone3;
$time_frm=$_POST['time_frm'];
$time_frm1=$_POST['time_frm1'];
$time_to=$_POST['time_to'];
$time_to1=$_POST['time_to1'];

include("securimage/securimage.php");
$img = new Securimage();
$valid = $img->check($_POST['codee']);


if($valid){

if($fname<>"" && $final_phone<>""){
	
	$message="<html>
		<head>
		  <title>We Can Call You</title>		  
		</head>
		<body>
		  <p>We Can Call You</p>
		  <table>
			<tr>
			  <td>First Name :</td><td>".$fname."</td>
			</tr>
			<tr>
			  <td>Last Name :</td><td>".$lname."</td>
			</tr>
			<tr>
			  <td>Phone Number :</td><td>".$final_phone."</td>
			</tr>
			<tr>
			  <td>Time From :</td><td>".$time_frm.' '.$time_frm1."</td>
			</tr>
			<tr>
			  <td>Time To :</td><td>".$time_to.' '.$time_to1."</td>
			</tr>
		  </table>
		</body>
	</html>";
	
	$sql=mysql_query("insert into call_you set first_name='$fname',last_name='$lname',time_frm='$time_frm',
					time_frm_am_pm='$time_frm1',time_to='$time_to',time_to_am_pm='$time_to1',phone_number='$final_phone'");
	
	$to      = 'info@stjosephmanor.com';

	$subject = 'St. Joseph Manor Call Request';
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: info@stjosephmanor.com' . "\r\n" .

	'Reply-To: info@stjosephmanor.com' . "\r\n" .

	'X-Mailer: PHP/' . phpversion();
	
	@mail($to,$subject,$message,$headers);
	
	//echo $message;
	
}
	echo "<script>location.href='thankyou_call_us.php';</script>";

}else{
	echo "<script>alert('Invalid Security Code.'); location.href='index.php';</script>";
}
			  
?>