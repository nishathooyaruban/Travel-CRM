<?php
 include 'config/config.php'; 

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
$description =$_POST['description'];
$created_by =$_POST['created_by'];
$assign_user =$_POST['assign_user'];

date_default_timezone_set('Asia/colombo');


 $created_on=date('Y-m-d h:i:s');


$status='PENDING';

	if($name=="")
	{
		echo"Please insert Customer Name <a href='add_booking.php'>Back</a>";
		return;
	}



$SQL="INSERT INTO bookings (name,phone,email,country,arrival_date,nod,adults,children,babies,description,created_by,status,created_on,assign_to) VALUES('$name','$phone','$email','$country','$arrival_date','$nod','$adults','$children','$babies','$description','$created_by','$status','$created_on','$assign_user')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "bookings.php"
//-->
</script>';


?>