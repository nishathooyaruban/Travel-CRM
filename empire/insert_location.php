<?php
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);
 include 'config/config.php'; 

$name =$_POST['name'];
$description =mysqli_real_escape_string($con,$_POST['description']);
$created_by =$_POST['created_by'];
date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');


$status='ENABLE';
$folder = "locations/";
	if($name=="")
	{
		echo"Please insert location name <a href='add_location.php'>Back</a>";
		return;
	}


 $query = mysqli_query($con,"SELECT * FROM locations WHERE name = '".$name."'"); 
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
   move_uploaded_file($_FILES["banner"]["tmp_name"],"locations/" .$date_time. $_FILES["banner"]["name"]);
   
   $bill_image=$date_time. $_FILES["banner"]["name"];
   }
   else{
	    $bill_image='';
   }
   
 }	

$SQL="INSERT INTO locations (name,description,created_by,img_url,status,created_on) VALUES('$name','$description','$created_by','$bill_image','$status','$cdate')";

$run=mysqli_query($con,$SQL);

echo'<script type="text/javascript">
<!--
alert("Successfully inserted");
window.location = "locations.php"
//-->
</script>';

}
?>