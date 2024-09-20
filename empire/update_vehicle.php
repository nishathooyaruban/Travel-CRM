<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$make_model =$_POST['make_model'];
$vehi_type =$_POST['vehi_type'];
$max_lug =$_POST['max_lug'];
$max_pass =$_POST['max_pass'];
$air_c =$_POST['air_c'];
$vehi_id =$_POST['vehi_id'];
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
   move_uploaded_file($_FILES["img1"]["tmp_name"],"vehicles/" .$date_time. $_FILES["img1"]["name"]);
   
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


$update="UPDATE `vehicles` SET make_model = '".$make_model."' ,vehi_type = '".$vehi_type."',max_pass = '".$max_pass."',max_lug = '".$max_lug."',air_c = '".$air_c."',img1 = '".$img1."'  WHERE id = '".$vehi_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "vehicles.php"

		//-->

		</script>' ;
	
?>
