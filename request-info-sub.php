<?php

include_once "db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST) && !empty($_POST)) {
		include("securimage/securimage.php");
		$img = new Securimage();
        $valid = $img->check($_POST['codee']);
      
	if($valid){
	$st_date=$_POST['RequestDateDay'];
	$first_name=$_POST['RequestFirstName'];
	$last_name=$_POST['RequestLastName'];
	$email=$_POST['RequestEmail'];
	$phone=$_POST['RequestPhone'];
	$relation_to_resident=$_POST['RequestRelationToResident'];
	$address=$_POST['RequestAddress'];
	$city=$_POST['RequestCity'];
	$state=$_POST['RequestState'];
	$zipcode=$_POST['RequestZipcode'];
	$tour_date=$_POST['RequestTourDateDay'];
	$time_of_tour=$_POST['RequestTimeOfTourHour'];
	$call_back=isset($_POST['RequestCallBack'])?1:0;
	$confirm_tour_schedule=isset($_POST['RequestConfirmTourSchedule'])?1:0;
	$mail_information=isset($_POST['RequestMailInformation'])?1:0;
	
	$resident_name=$_POST['RequestResidentName'];
	$resident_date_of_birth=$_POST['RequestResidentDateOfBirthDay'];
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
	$medication=isset($_POST['RequestMedication'])?1:0;
	$bathing=isset($_POST['RequestBathing'])?1:0;
	$meals=isset($_POST['RequestMeals'])?1:0;
	$transefering=isset($_POST['RequestTransefering'])?1:0;
	$continent=isset($_POST['RequestContinent'])?1:0;
	$incontinent=isset($_POST['RequestIncontinent'])?1:0;
	$walker=isset($_POST['RequestWalker'])?1:0;
	$cane=isset($_POST['RequestCane'])?1:0;
	$wheel_chair=isset($_POST['RequestWheelChair'])?1:0;
	$dressing=isset($_POST['RequestDressing'])?1:0;
	$diabetic=isset($_POST['RequestDiabetic'])?1:0;
	$insulin_dependent=isset($_POST['RequestInsulinDependent'])?1:0;
	$genral_health_info=isset($_POST['RequestGenralHealthInfo'])?1:0;
	$internet_search=isset($_POST['RequestInternetSearch'])?1:0;
	$friend=isset($_POST['RequestFriend'])?1:0;
	$print=isset($_POST['RequestPrint'])?1:0;
	$other=isset($_POST['RequestOther'])?1:0;
	
	$sql="insert into requests set date='$st_date',first_name='$first_name',last_name='$last_name',phone='$phone',email='$email',
	relation_to_resident='$relation_to_resident',address='$address',city='$city',state='$state',zipcode='$zipcode',tour_date='$tour_date',
	time_of_tour='$time_of_tour',call_back='$call_back',confirm_tour_schedule='$confirm_tour_schedule',mail_information='$mail_information',
	resident_name='$resident_name',resident_date_of_birth='$resident_date_of_birth',resident_age='$resident_age',resident_address='$resident_address',
	resident_city='$resident_city',resident_state='$resident_state',resident_zipcode='$resident_zipcode',resident_phone='$resident_phone',
	monthly_income='$monthly_income',veteran='$veteran',resident_lives='$resident_lives',resident_has='$resident_has',medication='$medication',
	bathing='$bathing',meals='$meals',transefering='$transefering',continent='$continent',incontinent='$incontinent',walker='$walker',cane='$cane',
	wheel_chair='$wheel_chair',dressing='$dressing',diabetic='$diabetic',insulin_dependent='$insulin_dependent',genral_health_info='$genral_health_info',
	internet_search='$internet_search',friend='$friend',print='$print',other='$other'";
	if (mysqli_query($conn, $sql)) {
	$message2="You have a new lead.";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: info@stjosephmanor.com' . "\r\n" .

    'Reply-To: info@stjosephmanor.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();
	
	@mail($email, "Request Form", $message2, $headers);
	
            // echo "<script>window.location.href='request-info.php'</script>";
            echo 'Request Info Has Been Submitted';
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
else{
echo 'Request Error !';
die;
}
?>