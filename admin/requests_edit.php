<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
include ("fckeditor.php");
$edit_id=$_REQUEST['edit_id'];
if($_POST['edit']>0){
	$edit=$_POST['edit'];
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
	if($_POST['RequestTimeOfTourMeridian']=='pm'){
		$RequestTimeOfTourHour=12+$_POST['RequestTimeOfTourHour'];
	}else{
		$RequestTimeOfTourHour=$_POST['RequestTimeOfTourHour'];
	}
	$time_of_tour=$RequestTimeOfTourHour.':'.$_POST['RequestTimeOfTourMin'];
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
	  
	if($_POST['RequestAdminTourTimeMeridian']=='pm'){
		$RequestAdminTourTimeHour=12+$_POST['RequestAdminTourTimeHour'];
	}else{
		$RequestAdminTourTimeHour=$_POST['RequestAdminTourTimeHour'];
	} 
	$admin_time_of_tour=$RequestAdminTourTimeHour.':'.$_POST['RequestAdminTourTimeMin'];
	$admin_date_of_tour=$_POST['RequestAdminTourDateYear'].'-'.$_POST['RequestAdminTourDateMonth'].'-'.$_POST['RequestAdminTourDateDay'];
	$admin_move_date_of_tour=$_POST['RequestAdminMoveInDateYear'].'-'.$_POST['RequestAdminMoveInDateMonth'].'-'.$_POST['RequestAdminMoveInDateDay'];
	$RequestAdminEmployeTour=$_POST['RequestAdminEmployeTour'];
	$RequestAdminEmployeTookInfo=$_POST['RequestAdminEmployeTookInfo'];
	$RequestAdminMoveInOtherFacility=$_POST['RequestAdminMoveInOtherFacility'];
	$RequestAdminMoveInWithFamily=$_POST['RequestAdminMoveInWithFamily'];
	$RequestComments=$_POST['RequestComments'];
	
	$sql=mysql_query("update requests set date='$st_date',first_name='$first_name',last_name='$last_name',phone='$phone',email='$email',
	relation_to_resident='$relation_to_resident',address='$address',city='$city',state='$state',zipcode='$zipcode',tour_date='$tour_date',
	time_of_tour='$time_of_tour',call_back='$call_back',confirm_tour_schedule='$confirm_tour_schedule',mail_information='$mail_information',
	resident_name='$resident_name',resident_date_of_birth='$resident_date_of_birth',resident_age='$resident_age',
	resident_city='$resident_city',resident_state='$resident_state',resident_zipcode='$resident_zipcode',resident_phone='$resident_phone',
	monthly_income='$monthly_income',veteran='$veteran',resident_lives='$resident_lives',resident_has='$resident_has',medication='$medication',
	bathing='$bathing',meals='$meals',transefering='$transefering',continent='$continent',incontinent='$incontinent',walker='$walker',cane='$cane',
	wheel_chair='$wheel_chair',dressing='$dressing',diabetic='$diabetic',insulin_dependent='$insulin_dependent',genral_health_info='$genral_health_info',
	internet_search='$internet_search',friend='$friend',print='$print',other='$other',
	admin_tour_time='$admin_time_of_tour',admin_tour_date='$admin_date_of_tour',admin_move_in_date='$admin_move_date_of_tour',
	admin_employe_took_info='$RequestAdminEmployeTookInfo',admin_employe_tour='$RequestAdminEmployeTour',admin_move_in_other_facility='$RequestAdminMoveInOtherFacility',
	admin_move_in_with_family='$RequestAdminMoveInWithFamily',comments='$RequestComments' where id='$edit'");
	echo "<script>window.location.href='requests.php?msg=yes';</script>";
}
?>
<script type="text/javascript">
function back_frm()
    {
	 window.location.href='requests.php';
  }
</script>
<?php
$sel=mysql_query("select * from requests where id='$edit_id'");
$row=mysql_fetch_array($sel);
?>
<table id="contents_table" cellpadding='0' cellspacing='0'>
	<tr>
		<td id="contents" valign="top">
			<table id="contents_table" cellpadding='0' cellspacing='0'>
				<tr>
					<td>
						<table id="contents_table" cellpadding='0' cellspacing='0'>
								<tr><td height="25px">&nbsp;</td></tr>
								<tr>
									<td>
										<div class="form">
											<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
											<tr>
											<td class="content_heading">
											Request Manager		</td>
											</tr>
											</table>
										<form id="RequestEditForm" method="post" action="requests_edit.php" accept-charset="utf-8">
										<input type="hidden" name="edit" value="<?php echo $edit_id; ?>">
											<table class="form_container">
												<tr class="header_row">
													<th colspan='2'>Edit Requests</th>
												</tr>
												<tr>
													<td class="content_cell">
														<table class="form_table" width="100%">
															<tr style="border:0px">
																<td class="content_cell" style="border:0px">
																	<table class="form_table" width="100%">
																		<tr>
																			<th colspan='4' class='header_row2'>User Details</th>
																		</tr>
																		<tr>
																		<td class='label'>
																			Date				
																		</td>
																		<td class='control request' nowrap>
																		<?php
																			$req_dat=explode('-',$row['date']);
																		?>
																		<select name="RequestDateMonth" twoDigitDay="1" id="RequestDateMonth">
																		<option value=""></option>
																		<?php  for($g=1;$g<13;$g++){ ?>
																			 <option value="<?php echo $g; ?>" <?php if($req_dat[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																		<?php } ?>
																		</select>-<select name="RequestDateDay" twoDigitDay="1" id="RequestDateDay">
																		<option value=""></option>
																		<?php  for($g=1;$g<32;$g++){ ?>
																			 <option value="<?php echo $g; ?>" <?php if($req_dat[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																		<?php } ?>
																		</select>-<select name="RequestDateYear" twoDigitDay="1" id="RequestDateYear">
																		<option value=""></option>
																		<?php  for($g=2012;$g<2022;$g++){ ?>
																			 <option value="<?php echo $g; ?>" <?php if($req_dat[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																		<?php } ?>
																		</select>			
																	</td>
																	<td class='label'>
																	First Name
																	</td>
																	<td class='control'>
																		<input name="RequestFirstName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" value="<?php echo $row['first_name']; ?>" id="RequestFirstName" />	
																	</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Last Name
																	</td>
																	<td class='control'>
																	<input name="RequestLastName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty" maxlength="255" value="<?php echo $row['last_name']; ?>" id="RequestLastName" />				</td>
																	<td class='label'>
																	Phone
																	</td>
																	<td class='control'>
																	<input name="RequestPhone" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" class="notEmpty numeric" maxlength="255" value="<?php echo $row['phone']; ?>" id="RequestPhone" />				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Email
																	</td>
																	<td class='control'>
																	<input name="RequestEmail" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['email']; ?>" id="RequestEmail" />				</td>
																	<td class='label'>
																	Relation To Resident 
																	</td>
																	<td class='control'>
																	<input name="RequestRelationToResident" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['relation_to_resident']; ?>" id="RequestRelationToResident" />				</td>
																	</tr>
																	
																	<tr>
																	<td class='label'>
																	Address				</td>
																	<td class='control'>
																	<textarea name="RequestAddress" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" cols="30" rows="6" id="RequestAddress" ><?php echo $row['address']; ?></textarea>				</td>
																	<td class='label'>
																	City				</td>
																	<td>
																	<input name="RequestCity" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['city']; ?>" id="RequestCity" />				</td>
																	</tr>
																	
																	<tr>
																	<td class='label'>
																	State				</td>
																	<td class='control'>
																	<input name="RequestState" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['state']; ?>" id="RequestState" />				</td>
																	<td class='label'>
																	Tour Date				</td>
																	<td class='control request' nowrap>
																	<?php
																		$tour_date_exp=explode('-',$row['tour_date']);
																	?>
																	<select name="RequestTourDateMonth" twoDigitDay="1" id="RequestTourDateMonth">
																	<option value=""></option>
																	<?php  for($g=1;$g<13;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	</select>-<select name="RequestTourDateDay" twoDigitDay="1" id="RequestTourDateDay">
																	<option value=""></option>
																	<?php  for($g=1;$g<32;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	</select>-<select name="RequestTourDateYear" twoDigitDay="1" id="RequestTourDateYear">
																	<option value=""></option>
																	<?php  for($g=2012;$g<2022;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($tour_date_exp[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	
																	</select></td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Time Of Tour				</td>
																	<td class='control request'>
																	<?php
																		$time_of_tour_exp=explode(':',$row['time_of_tour']);
																		if($time_of_tour_exp[0]>12){
																			$tour_time=$time_of_tour_exp[0]-12;
																			$am_pm_tour="pm";
																		}else{
																			$tour_time=$time_of_tour_exp[0];
																			$am_pm_tour="am";
																		}
																	?>
																	 <select name="RequestTimeOfTourHour" style="width:70px;" class="txt_label" id="RequestTimeOfTourHour">
																	  <option value=""></option>
																	  <?php  for($g=1;$g<13;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($tour_time==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	  <?php }?>
																	</select> 
																	 <select name="RequestTimeOfTourMin" style="width:70px;" class="txt_label" id="RequestTimeOfTourMin">
																	 <option value=""></option>
																	  <?php  for($g=1;$g<61;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($time_of_tour_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	  <?php }?>
																	</select>
																	<select name="RequestTimeOfTourMeridian" style="width:90px;" class="txt_label" id="RequestTimeOfTourMeridian">
																	 <option value=""></option>
																	  <option value="am" <?php if($am_pm_tour=='am'){echo "selected";} ?>>am</option>
																	  <option value="pm" <?php if($am_pm_tour=='pm'){echo "selected";} ?>>pm</option>
																	</select>
																	</td>
																	<td class='label'>
																	Zipcode				</td>
																	<td class='control'>
																	<input name="RequestZipcode" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="256" value="<?php echo $row['zipcode']; ?>" id="RequestZipcode" />				</td>
																	</tr>
																	
																	<tr>
																	<td class='label'>
																	Call Back				</td>
																	<td class='control'>
																	<input type="checkbox" name="RequestCallBack" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" <?php if($row['call_back']==1){echo"checked";} ?> id="RequestCallBack" />				</td>
																	<td class='label'>
																	Mail Information				</td>
																	<td class='control'>
																	<input type="checkbox" name="RequestMailInformation" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" <?php if($row['mail_information']==1){echo"checked";} ?> id="RequestMailInformation"/>				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Confirm Tour Schedule				</td>
																	<td class='control'>
																	<input type="checkbox" name="RequestConfirmTourSchedule" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" <?php if($row['confirm_tour_schedule']==1){echo"checked";} ?> id="RequestConfirmTourSchedule" />				</td>
																	<td class='label'>
																	Resident Name				</td>
																	<td class='control'>
																	<input name="RequestResidentName" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['resident_name']; ?>" id="RequestResidentName" />				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Resident Date Of Birth				</td>
																	<td class='control request'>
																	<?php
																		$dob_exp=explode('-',$row['resident_date_of_birth']);
																	?>
																	<select name="RequestResidentDateOfBirthMonth" twoDigitDay="1" id="RequestResidentDateOfBirthMonth">
																	<option value=""></option>
																	<?php  for($g=1;$g<13;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($dob_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	</select>-<select name="RequestResidentDateOfBirthDay" twoDigitDay="1" id="RequestResidentDateOfBirthDay">
																	<option value=""></option>
																	<?php  for($g=1;$g<32;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($dob_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	</select>-<select name="RequestResidentDateOfBirthYear" twoDigitDay="1" id="RequestResidentDateOfBirthYear">
																	<option value=""></option>
																	<?php  for($g=1912;$g<2022;$g++){ ?>
																		 <option value="<?php echo $g; ?>" <?php if($dob_exp[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
																	<?php } ?>
																	
																	</select>
																	</td>
																	<td class='label'>
																	Resident Age				</td>
																	<td class='control'>
																	<input name="RequestResidentAge" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="11" value="<?php echo $row['resident_age']; ?>" id="RequestResidentAge" />				</td>
																	</tr>
																	<tr>
																	
																	<td class='label'>
																	Resident City				</td>
																	<td class='control'>
																	<input name="RequestResidentCity" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['resident_city']; ?>" id="RequestResidentCity" />				</td>
																	<td class='label'>
																	Resident State				</td>
																	<td class='control'>
																	<input name="RequestResidentState" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['resident_state']; ?>" id="RequestResidentState" />				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Resident Zipcode				</td>
																	<td class='control'>
																	<input name="RequestResidentZipcode" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="256" value="<?php echo $row['resident_zipcode']; ?>" id="RequestResidentZipcode" />				</td>
																	<td class='label'>
																	Resident Phone 				</td>
																	<td class='control'>
																	<input name="RequestResidentPhone" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['resident_phone']; ?>" id="RequestResidentPhone" />				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Monthly Income				</td>
																	<td class='control'>
																	<input name="RequestMonthlyIncome" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="11" value="<?php echo $row['monthly_income']; ?>" id="RequestMonthlyIncome" />				</td>
																	<td class='label'>
																	Veteran				</td>
																	<td class='control'>
																	<input name="RequestVeteran" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['veteran']; ?>" id="RequestVeteran" />				</td>
																	</tr>
																	<tr>
																	<td class='label'>
																	Resident Lives				</td>
																	<td class='control'>
																	<select name="RequestResidentLives" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentLives">
																	<option value="">-Select</option>
																	<option value="0" <?php if($row['resident_lives']=='0'){echo "selected";} ?>>Family</option>
																	<option value="1" <?php if($row['resident_lives']=='1'){echo "selected";} ?>>Facility</option>
																	<option value="2" <?php if($row['resident_lives']=='2'){echo "selected";} ?>>Hospital</option>
																	<option value="3" <?php if($row['resident_lives']=='3'){echo "selected";} ?>>Independent</option>
																	</select>				</td>
																	<td class='label'>
																	Resident Has				</td>
																	<td class='control'>
																	<select name="RequestResidentHas" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentHas">
																	<option value="">-Select-</option>
																	<option value="0" <?php if($row['resident_has']=='0'){echo "selected";} ?>>Medicare</option>
																	<option value="1" <?php if($row['resident_has']=='1'){echo "selected";} ?>>Medicaid</option>
																	<option value="2" <?php if($row['resident_has']=='2'){echo "selected";} ?>>Other Insurance</option>
																	</select>				</td>
																	</tr>
																	<tr>
																	
																	<td class='label'>
																	Medication				</td>
																	<td class='control'>
																	<input type="checkbox" name="RequestMedication" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestMedication" <?php if($row['medication']=='1'){echo "checked";} ?> />				</td>
																	<td class='label'>
																	Bathing				</td>
																	<td class='control'>
																	<input type="checkbox" name="RequestBathing" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestBathing" <?php if($row['bathing']=='1'){echo "checked";} ?> />				</td>
																	</td>
																</tr>
																<tr>
																<td class='label'>
																Meals				</td>
																<td class='control'>
																<input type="checkbox" name="RequestMeals" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestMeals"  <?php if($row['meals']=='1'){echo "checked";} ?> />				</td>
																<td class='label'>
																Transefering				</td>
																<td class='control'>
																<input type="checkbox" name="RequestTransefering" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestTransefering" <?php if($row['transefering']=='1'){echo "checked";} ?> />				</td>
																</tr>
																<tr>
																<td class='label'>
																Continent				</td>
																<td class='control'>
																<input type="checkbox" name="RequestContinent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestContinent" <?php if($row['continent']=='1'){echo "checked";} ?>  />				</td>
																<td class='label'>
																Incontinent				</td>
																<td class='control'>
																<input type="checkbox" name="RequestIncontinent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestIncontinent" <?php if($row['incontinent']=='1'){echo "checked";} ?>  />				</td>
																</tr>
																<tr>
																
																<td class='label'>
																Walker				</td>
																<td class='control'>
																<input type="checkbox" name="RequestWalker" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestWalker" <?php if($row['walker']=='1'){echo "checked";} ?> />				</td>
																<td class='label'>
																Cane				</td>
																<td class='control'>
																<input type="checkbox" name="RequestCane" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestCane" <?php if($row['cane']=='1'){echo "checked";} ?> />				</td>
																</tr>
																<tr>
																<td class='label'>
																Wheel Chair				</td>
																<td class='control'>
																<input type="checkbox" name="RequestWheelChair" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestWheelChair" <?php if($row['wheel_chair']=='1'){echo "checked";} ?> />				</td>
																<td class='label'>
																Dressing				</td>
																<td class='control'>
																<input type="checkbox" name="RequestDressing" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestDressing" <?php if($row['dressing']=='1'){echo "checked";} ?> />				</td>
																</tr>
																<tr>
																<td class='label'>
																Diabetic				</td>
																<td class='control'>
																<input type="checkbox" name="RequestDiabetic" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestDiabetic" <?php if($row['diabetic']=='1'){echo "checked";} ?> />				</td>
																<td class='label'>
																Insulin Dependent				</td>
																<td class='control'>
																<input type="checkbox" name="RequestInsulinDependent" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestInsulinDependent" <?php if($row['insulin_dependent']=='1'){echo "checked";} ?> />				</td>
																</tr>
																<tr>
																
																<td class='label'>
																Genral Health Info				</td>
																<td class='control' colspan="2">
																<textarea name="RequestGenralHealthInfo" cols="30" rows="6" id="RequestGenralHealthInfo"><?php echo $row['genral_health_info'];?></textarea>				</td>
																</tr>
																<tr>
																
																<td class='label' colspan="2">
																<input type="checkbox" name="RequestInternetSearch" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestInternetSearch" <?php if($row['internet_search']=='1'){echo "checked";} ?>>	
																Internet Search
																<input type="checkbox" name="RequestFriend" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestFriend" <?php if($row['friend']=='1'){echo "checked";} ?>/>			
																Friend	
																<input type="checkbox" name="RequestPrint" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestPrint" <?php if($row['print']=='1'){echo "checked";} ?> />
																Print
																<input type="checkbox" name="RequestOther" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1" id="RequestOther" <?php if($row['other']=='1'){echo "checked";} ?> />
																Other
																</td>
																</tr>
																</table>
															</td>
														</tr>
													<tr style="border:0px">
													<td class="content_cell" style="border:0px">
													<table class="form_table" width="100%">
													<tr>
													<th colspan='4' class='header_row2'>Tour</th>
													</tr>
													<tr>
													<td class='label'>
													Tour Time				</td>
													<td class='control request'>
													<?php
														if($row['admin_tour_time']==""){
															$row['admin_tour_time']=date('H:i:s');
														}
														$admin_tour_time_exp=explode(':',$row['admin_tour_time']);
														if($admin_tour_time_exp[0]>12){
															$admin_tour_time_new=$admin_tour_time_exp[0]-12;
															$admin_tour_time_am_pm="pm";
														}else{
															$admin_tour_time_new=$admin_tour_time_exp[0];
															$admin_tour_time_am_pm="am";
														}
													?>
													 <select name="RequestAdminTourTimeHour" style="width:70px;" class="txt_label" id="RequestAdminTourTimeHour">
													  <?php  for($g=1;$g<13;$g++){ ?>
														 <option value="<?php echo $g; ?>" <?php if($admin_tour_time_new==$g){echo "selected";} ?>><?php echo $g; ?></option>
													  <?php }?>
													</select> 
													 <select name="RequestAdminTourTimeMin" style="width:70px;" class="txt_label" id="RequestAdminTourTimeMin">
													  <?php  for($g=1;$g<61;$g++){ ?>
														 <option value="<?php echo $g; ?>" <?php if($admin_tour_time_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
													  <?php }?>
													</select>
													<select name="RequestAdminTourTimeMeridian" style="width:90px;" class="txt_label" id="RequestAdminTourTimeMeridian">
													  <option value="am" <?php if($admin_tour_time_am_pm=='am'){echo "selected";} ?>>am</option>
													  <option value="pm" <?php if($admin_tour_time_am_pm=='pm'){echo "selected";} ?>>pm</option>
													</select>
													</td>
													<td class='label'>
													Tour Date				</td>
													<td class='control request'>
													<?php
														if($row['admin_tour_date']==""){
															$row['admin_tour_date']=date('Y-m-d');
														}
														$admin_tour_date_exp=explode('-',$row['admin_tour_date']);
													?>
													<select name="RequestAdminTourDateMonth" twoDigitDay="1" id="RequestAdminTourDateMonth">
														<?php  for($g=1;$g<13;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_tour_date_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
														</select>-<select name="RequestAdminTourDateDay" twoDigitDay="1" id="RequestAdminTourDateDay">
														<?php  for($g=1;$g<32;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_tour_date_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
														</select>-<select name="RequestAdminTourDateYear" twoDigitDay="1" id="RequestAdminTourDateYear">
														<?php  for($g=1912;$g<2022;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_tour_date_exp[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
													
													</select>
													</td>
													</tr>
													<tr>
													<td class='label'>
													Employee Took Info				</td>
													<td class='control'>
													<input name="RequestAdminEmployeTookInfo" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['admin_employe_took_info'];?>" id="RequestAdminEmployeTookInfo" />				</td>
													<td class='label'>
													Employee Tour 				</td>
													<td class='control request'>
													<input name="RequestAdminEmployeTour" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['admin_employe_tour'];?>" id="RequestAdminEmployeTour" />				</td>
													</tr>
													<tr>
													<td class='label'>
													Move In Date				</td>
													<td class='control request'>
													<?php
														if($row['admin_move_in_date']==""){
															$row['admin_move_in_date']=date('Y-m-d');
														}
														$admin_move_in_date_exp=explode('-',$row['admin_move_in_date']);
													?>
													<select name="RequestAdminMoveInDateMonth" twoDigitDay="1" id="RequestAdminMoveInDateMonth">
														<?php  for($g=1;$g<13;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_move_in_date_exp[1]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
														</select>-<select name="RequestAdminMoveInDateDay" twoDigitDay="1" id="RequestAdminMoveInDateDay">
														<?php  for($g=1;$g<32;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_move_in_date_exp[2]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
														</select>-<select name="RequestAdminMoveInDateYear" twoDigitDay="1" id="RequestAdminMoveInDateYear">
														<?php  for($g=1912;$g<2022;$g++){ ?>
															 <option value="<?php echo $g; ?>" <?php if($admin_move_in_date_exp[0]==$g){echo "selected";} ?>><?php echo $g; ?></option>
														<?php } ?>
													
													</select>
													</td>
													<td class='label'>
													Move In Other Facility				</td>
													<td class='control request'>
													<input name="RequestAdminMoveInOtherFacility" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['admin_move_in_other_facility'];?>" id="RequestAdminMoveInOtherFacility" />				</td>
													</tr>
													<tr>
													<td class='label'>
													Move In With Family 				</td>
													<td class='control'>
													<input name="RequestAdminMoveInWithFamily" type="text" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" maxlength="255" value="<?php echo $row['admin_move_in_with_family'];?>" id="RequestAdminMoveInWithFamily" />				</td>
													<td class='label'>
													Comments				</td>
													<td class='control request'>
													<textarea name="RequestComments" minYear="1912" maxYear="2022" dateFormat="DMY" twoDigitDay="1" cols="30" rows="6" id="RequestComments" ><?php echo $row['comments'];?></textarea>				</td>
													</tr>
													</table>
													</td>
													</tr>		
													</table>
												</td>
												</tr>
											<tr class="footer_row">
											<td>
											<input class="admin_button" type="submit" value="Save" /> <button type="button" class="admin_button" onclick="back_frm();">Cancel</button>	<input type="button" class="admin_button" onClick="window.print()" value="Print This Page"/>	</td>
											</tr>
											</table></form>								</td>
										</tr>
										</table>
</td>
</tr>
</table>

</td>
</tr>
										</table>
<?php
include "common/footer.php";
?>			