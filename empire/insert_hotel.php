<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
 include 'config/config.php'; 

$name =$_POST['name'];
$description =mysqli_real_escape_string($con,$_POST['description']);
$location =$_POST['location'];$star =$_POST['star'];
$created_by =$_POST['created_by'];
date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');


$status='ENABLE';
$folder = "hotels/";
	if($name=="")
	{
		echo"Please insert hotel name <a href='add_hotel.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM hotels WHERE name = '".$name."'"); 
if (mysqli_num_rows($query) > 0) 
{ 
     echo'<script type="text/javascript">
<!--
alert("Location already exists");
window.location = "add_location.php"
//-->
</script>';
}
else{
/*	move_uploaded_file($_FILES["banner"]["banner"] , "$folder".$_FILES["banner"]["name"]);
"<p align=center>File ".$_FILES["banner"]["name"]."loaded...";
*/
$date_time=date("Y-m-d h:i:sa");

// Check if image file is a actual image or fake image

 if (!isset($_FILES['banner']['tmp_name'])) {
  $bill_image=0;
 }else{
 $bill_image=$_FILES['banner']['tmp_name'];
 $image= addslashes(file_get_contents($_FILES['banner']['tmp_name']));
 $image_name= addslashes($_FILES['banner']['name']);
   if($bill_image!=''){
   move_uploaded_file($_FILES["banner"]["tmp_name"],"hotels/" .$date_time. $_FILES["banner"]["name"]);
   
   $bill_image=$date_time. $_FILES["banner"]["name"];
   }
   else{
	    $bill_image='';
   }
   
 }	

$SQL="INSERT INTO hotels (name,description,created_by,img_url,star,status,created_on,location) VALUES('$name','$description','$created_by','$bill_image','$star','$status','$cdate','$location')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "hotels.php"
//-->
</script>';

}
?>