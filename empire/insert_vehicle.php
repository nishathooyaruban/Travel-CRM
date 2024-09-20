<?php

ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 

$make_model =$_POST['make_model'];
$vehi_type =$_POST['vehi_type'];
$max_pass =$_POST['max_pass'];
$max_lug =$_POST['max_lug'];
$air_c =$_POST['air_c'];
date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');


$status='ENABLE';
$folder = "locations/";
	if($make_model=="")
	{
		echo"Please insert vehicle name <a href='add_vehicle.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM vehicles WHERE make_model = '".$make_model."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("Vehicle already exists");
window.location = "add_vehicle.php"
//-->
</script>';
}
else{
/*	move_uploaded_file($_FILES["banner"]["banner"] , "$folder".$_FILES["banner"]["name"]);
"<p align=center>File ".$_FILES["banner"]["name"]."loaded...";
*/
$date_time=date("Y-m-d h:i:sa");

// Check if image file is a actual image or fake image

 if (!isset($_FILES['img1']['tmp_name'])) {
  $img1=0;
 }else{
 $img1=$_FILES['img1']['tmp_name'];
 $image= addslashes(file_get_contents($_FILES['img1']['tmp_name']));
 $image_name= addslashes($_FILES['img1']['name']);
   if($img1!=''){
   move_uploaded_file($_FILES["img1"]["tmp_name"],"vehicles/" .$date_time. $_FILES["img1"]["name"]);
   
   $img1=$date_time. $_FILES["img1"]["name"];
   }
   else{
	    $img1='';
   }
   
 }	 


$SQL="INSERT INTO vehicles (make_model,vehi_type,max_pass,max_lug,air_c,img1) VALUES('$make_model','$vehi_type','$max_pass','$max_lug','$air_c','$img1')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "vehicles.php"
//-->
</script>';

}
?>