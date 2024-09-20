<?php
 include 'config/config.php'; 

$name =$_POST['name'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$user_type =$_POST['user_type'];

date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');


$status='ENABLE';

	if($name=="")
	{
		echo"Please insert Employee Name <a href='user_register.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM users WHERE email = '".$email."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("Employee already exists");
window.location = "user_register.php"
//-->
</script>';
}
else{
$SQL="INSERT INTO users (name,phone,email,pass,user_type,status,created_on) VALUES('$name','$phone','$email','$pass','$user_type','$status','$cdate')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "users.php"
//-->
</script>';

}
?>