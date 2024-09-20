<?php

ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 

$name =$_POST['name'];
$description =mysqli_real_escape_string($con,$_POST['description']);
$location =$_POST['location'];
$created_by =$_POST['created_by'];
date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');


$status='ENABLE';
$folder = "locations/";
	if($name=="")
	{
		echo"Please insert Attraction name <a href='add_atttraction.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM attractions WHERE name = '".$name."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("Attraction already exists");
window.location = "add_atttraction.php"
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
   move_uploaded_file($_FILES["img1"]["tmp_name"],"attractions/" .$date_time. $_FILES["img1"]["name"]);
   
   $img1=$date_time. $_FILES["img1"]["name"];
   }
   else{
	    $img1='';
   }
   
 }	 


$SQL="INSERT INTO attractions (name,description,location,created_by,img1,status,created_on) VALUES('$name','$description','$location','$created_by','$img1','$status','$cdate')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "atttractions.php"
//-->
</script>';

}
?>