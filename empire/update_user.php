<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$name =$_POST['name'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$user_type =$_POST['user_type'];
$status =$_POST['status'];
$user_id =$_POST['user_id'];

date_default_timezone_set('Asia/colombo');



$update="UPDATE `users` SET name = '".$name."',phone = '".$phone."',email = '".$email."',pass = '".$pass."',user_type = '".$user_type."',status = '".$status."'  WHERE id = '".$user_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "users.php"

		//-->

		</script>' ;
	
?>
