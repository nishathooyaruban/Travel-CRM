<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$name =$_POST['name'];
$description =mysqli_real_escape_string($con,$_POST['description']);
$loc_id =$_POST['loc_id'];
$img_url_old =$_POST['img_url_old'];

date_default_timezone_set('Asia/colombo');

if($_FILES['img_url']['tmp_name']!=''){
if (!isset($_FILES['img_url']['tmp_name'])) {
  $img_url=0;
 }else{
 $img_url=$_FILES['img_url']['tmp_name'];
 $image= addslashes(file_get_contents($_FILES['img_url']['tmp_name']));
 $image_name= addslashes($_FILES['img_url']['name']);
   if($img_url!=''){
   move_uploaded_file($_FILES["img_url"]["tmp_name"],"locations/" .$date_time. $_FILES["img_url"]["name"]);
   
   $img_url=$date_time. $_FILES["img_url"]["name"];
   }
   else{
	    $img_url='';
   }
   
 }
 }else{
	 $img_url=$img_url_old;
 }


 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `locations` SET name = '".$name."',description = '".$description."',img_url = '".$img_url."'  WHERE id = '".$loc_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "locations.php"

		//-->

		</script>' ;
	
?>
