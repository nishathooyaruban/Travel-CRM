<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 include 'config/config.php'; 



 $book_id =$_POST['book_id'];

 $nod =$_POST['nod'];
$num_ref =$_POST['num_ref'];
$vehi_type =$_POST['vehi_type'];
$price =$_POST['price'];
$curruncy =$_POST['curruncy'];
$spe_note =$_POST['spe_note'];

$created_by =$_POST['created_by'];
$date_time=date("Y-m-d h:i:sa");


$update="UPDATE `book_itinery` SET spe_note = '".$spe_note."' ,vehi_type = '".$vehi_type."',price = '".$price."',curruncy = '".$curruncy."' ,status = 'PENDING'  WHERE id = '".$num_ref."'";

$run2=mysqli_query($connect, $update);

date_default_timezone_set('Asia/colombo');





 $cdate=date('Y-m-d h:i:s');
$num_padded = sprintf("%02d", $nod);
for ($x = 1; $x <= $num_padded; $x++) {

	
	$num_x= sprintf("%02d", $x);
	$attraction = '';
		//$attraction.$num_x =array();
 $location =$_POST['location'.$num_x];
 $hotel01 =$_POST['hotel01'.$num_x];

 $attraction.$num_x = implode(',',$_POST['attraction'.$num_x]);
//$tot_att  = implode(",", $attraction.$num_x);

$insert_order = 'INSERT INTO itinery(book_id,nod, ref_num, location, attractions,created_by,created_on,status,hotel01)  
                     VALUES("'.$book_id.'", "'.$nod.'","'.$num_ref.'","'.$location.'","'.$attraction.$num_x.'","'.$created_by.'","'.$cdate.'","PENDING","'.$hotel01.'")'; 
					 if(mysqli_query($connect, $insert_order))  
                     {  
                          $ref_num = mysqli_insert_id($connect);  
                     }


}
echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "bookings.php"

		//-->

		</script>' ;

	
?>
