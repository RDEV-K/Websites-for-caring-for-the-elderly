<?php
	session_start();
	include_once('common/conn.php');

	if($_REQUEST['u_name'] && $_REQUEST['u_pass']){
		$u_name=$_REQUEST['u_name'];
		$u_pass=$_REQUEST['u_pass'];
	}else{
		$u_name=$_SESSION['u_name'];
		$u_pass=$_SESSION['u_pass'];
	}
	//echo "select * from user where u_name='$u_name' and u_pass='$u_pass'";
	$user_qry=mysql_query("select * from users where username='$u_name' and password='$u_pass' and username!='' and password!=''");
	if(mysql_num_rows($user_qry)>0){
		$_SESSION['u_name']=$u_name;
		$_SESSION['u_pass']=$u_pass;
	}else{
		echo"<script>location.href='index.php?msg=Please check user name and password'</script>";
		session_destroy();
	}
	
?>