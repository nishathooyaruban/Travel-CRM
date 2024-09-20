<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 include 'config/config.php'; 



 $book_id =$_POST['book_id'];
 $updated_by =$_POST['created_by'];

 $nod =$_POST['nod'];
$num_ref =$_POST['num_ref'];
$vehi_type =$_POST['vehi_type'];
$spe_note =$_POST['spe_note'];
$itinary_status =$_POST['itinary_status'];
$price =$_POST['price'];
$curruncy =$_POST['curruncy'];

$created_by =$_POST['created_by'];

$update="UPDATE `book_itinery` SET spe_note = '".$spe_note."' ,vehi_type = '".$vehi_type."',price = '".$price."',curruncy = '".$curruncy."' ,status = '".$itinary_status."'  WHERE id = '".$num_ref."'";

$run=mysqli_query($connect, $update);
$update2="UPDATE `bookings` SET status = '".$itinary_status."'  WHERE id = '".$book_id."'";

$run2=mysqli_query($connect, $update2);

date_default_timezone_set('Asia/colombo');





 $cdate=date('Y-m-d h:i:s');
$num_padded = sprintf("%02d", $nod);/*
for ($x = 1; $x <= $num_padded; $x++) {
	echo $num_x= sprintf("%02d", $x);
	
		//$attraction.$num_x =array();
 $location =$_POST['location'.$num_x];
 $hotel =$_POST['hotel01'.$num_x];
echo  $row =$_POST['row_id'.$num_x];
   $attraction=$_POST['attraction'.$num_x];


   $attraction.$num_x = implode(',',$attraction);
//$tot_att  = implode(",", $attraction.$num_x);


$update3="UPDATE `itinery` SET status = '".$itinary_status."',location = '".$location."',attractions = '".$attraction.$num_x."',hotel01 = '".$hotel."' ,updated_on = '".$cdate."' ,status = '".$itinary_status."',updated_by = '".$updated_by."'  WHERE id = '".$row."'";

$run3=mysqli_query($connect, $update3);
}*/
echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "bookings.php"

		//-->

		</script>' ;
	
?>
