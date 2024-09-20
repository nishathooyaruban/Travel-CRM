<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$name =$_POST['name'];
$description =mysqli_real_escape_string($con,$_POST['description']);
$location =$_POST['location'];
$att_id =$_POST['att_id'];
$img1_old =$_POST['img1_old'];

date_default_timezone_set('Asia/colombo');

if($_FILES['img1']['tmp_name']!=''){
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
 }else{
	 $img1=$img1_old;
 }


 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `attractions` SET name = '".$name."' ,location = '".$location."',description = '".$description."',img1 = '".$img1."'  WHERE id = '".$att_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "atttractions.php"

		//-->

		</script>' ;
	
?>
