<?php



error_reporting(E_ALL);

error_reporting(-1);

ini_set('error_reporting', E_ALL);

 include 'config/config.php'; 



$book_id =$_POST['book_id'];

$assign_user =$_POST['assign_user'];


date_default_timezone_set('Asia/colombo');





 $cdate=date('Y-m-d h:i:s');



$update="UPDATE `bookings` SET assign_to = '".$assign_user."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "bookings.php"

		//-->

		</script>' ;
	
?>