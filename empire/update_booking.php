<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 include 'config/config.php'; 




$book_id =$_POST['book_id'];
$name =$_POST['name'];

$phone =$_POST['phone'];

$email =$_POST['email'];

$country =$_POST['country'];

$arrival_date =$_POST['arrival_date'];

$arrival_date =date("Y-m-d", strtotime($arrival_date) );


$nod =$_POST['nod'];

$adults =$_POST['adults'];

$children =$_POST['children'];

$babies =$_POST['babies'];

$description =mysqli_real_escape_string($con,$_POST['description']);

$created_by =$_POST['created_by'];
$assign_user =$_POST['assign_user'];

date_default_timezone_set('Asia/colombo');





 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `bookings` SET name = '".$name."' ,phone = '".$phone."',email = '".$email."',country = '".$country."',arrival_date = '".$arrival_date."' ,nod = '".$nod."',adults = '".$adults."',children = '".$children."',babies = '".$babies."',description = '".$description."',assign_to = '".$assign_user."'  WHERE id = '".$book_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "bookings.php"

		//-->

		</script>' ;
	
?>
