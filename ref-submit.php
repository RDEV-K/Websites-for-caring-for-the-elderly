<?php
include_once "db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST) && !empty($_POST)) {
	if($_POST['fname'] == '' || $_POST['textfield2'] == '' || $_POST['textfield3'] == '' || $_POST['textfield4'] == '' || $_POST['textfield5'] == '') {
		echo 'Pleas fill out all fields ';
		die;
	}   else {
		$first_name=$_POST['fname'];
		$last_name=$_POST['textfield2'];
		$email=$_POST['textfield3'];
		$phone_number=$_POST['textfield4'];
        $message=$_POST['textfield5'];
		include("securimage/securimage.php");
		$img = new Securimage();
		$valid = $img->check($_POST['codee']);
	
	if($valid){
				$sql="insert into refer_friends set first_name='$first_name',last_name='$last_name',email='$email',phone_number='$phone_number',message='$message'";
				// $sql = "INSERT INTO contacts (first_name, last_name, email,phone_number, message)VALUES ('$first_name',$last_name', '$email', '$phone_number')";

			if (mysqli_query($conn, $sql)) {			
				$message="You have a new lead.";
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: info@stjosephmanor.com' . "\r\n" .
			
				'Reply-To: info@stjosephmanor.com' . "\r\n" .
			
				'X-Mailer: PHP/' . phpversion();
				
				@mail($email, "Contact Form", $message, $headers);
				
				// echo "<script>window.location.href='contact-us.php'</script>";
				echo 'Refer a Friend Request Has Been Submitted';
			} 
			else {
				echo "Opps! Something went wrong. Please try a later";
		}

	}
	else{
		echo 'Security Code invalid';
		die;
	}
}
}
else{
	echo 'Request Error !';
	die;
}
?>