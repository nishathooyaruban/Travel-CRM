<?php 
$book_id=$_GET['book_id'];
$ref_num=$_GET['ref_num'];
$nod=$_GET['nod'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>

<html lang="en">



<head>

    <!-- Required meta tags-->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="au theme template">

    <meta name="author" content="Hau Nguyen">

    <meta name="keywords" content="au theme template">



    <!-- Title Page-->

    <title><?php 
$num_padded = sprintf("%02d", $nod);
echo $num_padded; // returns 04

?> Days <?php 

 $nights=$num_padded-1; 

echo $nights = sprintf("%02d", $nights);// returns 04

?> Nights</title>



    <!-- Fontfaces CSS-->

    <link href="css/font-face.css" rel="stylesheet" media="all">

    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">

    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">



    <!-- Bootstrap CSS-->

    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">



    <!-- Vendor CSS-->

    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">

    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">

    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">

    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">



    <!-- Main CSS-->

    <link href="css/theme.css" rel="stylesheet" media="all">



</head>



<body class="animsition">
<style>

body {
  background: rgb(204,204,204); 
  font-size:14px;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm; 
margin-top:50px;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>



<page size="A4" style="padding:100px;text-align:center;page-break-after: always!important">
<h2><?php 
$num_padded = sprintf("%02d", $nod);
echo $num_padded; // returns 04

?> Days <?php 

 $nights=$num_padded-1; 

echo $nights = sprintf("%02d", $nights);// returns 04

?> Nights<br>In Sri Lanka</h2>
<img src="images/Logo.png.png" width="auto" style="margin:0 auto;">
<img src="general_images/cover.jpg" width="100%">
<br>
<br>

<div style="position:relative;text-align:left;">
<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM bookings WHERE id='$book_id'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ ?>
<h4>Name: <?php echo $rowid['name']; ?></h4>
<h5>Arrival Date: <?php echo $arrival_date=$rowid['arrival_date']; ?></h5>
<h5>Adullts: <?php echo $rowid['adults']; ?></h5>
<h5>Children: <?php echo $rowid['children']; ?></h5>
<h5>Babies: <?php echo $rowid['babies']; $tot_pass=$rowid['adults']+$rowid['children']+$rowid['babies'];?></h5>
	<?php } ?>
</div>

</page>
<page size="A4" style="page-break-after: always!important">
<div class="col-md-12" style="background:url(general_images/welcome2.jpg);background-size:cover;background-position:center center;height:100%;padding:100px;">
<h2 style="text-align:left;color:#fff;"><?php 
$num_padded = sprintf("%02d", $nod);
echo $num_padded; // returns 04

?> Days <?php 

 $nights=$num_padded-1; 

echo $nights = sprintf("%02d", $nights);// returns 04

?> Nights</h2>
<h2 style="text-align:left;color:#fff;"><?php echo date('d-M-Y', strtotime($arrival_date)); ?> to <?php echo $stop_date = date('d-M-Y', strtotime($arrival_date . '+'.$nights.'days'));?></h2>

<br>
<br>


</div>

</page>
<?php
						$x=1;
						$sqlidi= "SELECT * FROM itinery WHERE book_id='$book_id' AND ref_num='$ref_num' ";
	$runidi=mysqli_query($con,$sqlidi) or die("SQL error");
	 $noridi=mysqli_num_rows($runidi);

	while($rowidi=mysqli_fetch_array($runidi))
	{ 
$nod=$rowidi['nod'];
$id=$rowidi['id'];
$location=$rowidi['location'];
 $attractions=$rowidi['attractions'];
$hotel=$rowidi['hotel01'];


//$num_padded =$nod;
$num_day = sprintf("%02d", $x);
?>
<page size="A4" style="padding:20px;">
<div style="width:100%;padding: 16px;background: #1360b6;color:#fff;font-weight: 700;font-size: 21px;">Day <?php echo $num_day; ?> | <?php $sqliloc= "SELECT * FROM locations WHERE id='$location'";
	$runiloc=mysqli_query($con,$sqliloc) or die("SQL error");
	$noriloc=mysqli_num_rows($runiloc);

	while($rowiloc=mysqli_fetch_array($runiloc))
	{
		echo$loc=$rowiloc['name'];
		$loc_description=$rowiloc['description'];
		$loc_img_url=$rowiloc['img_url'];
		
	}  ?> <?php if($num_day=='01'){ $y=0;}else{$y=$x-1;} echo $stop_date = date('d-M-Y', strtotime($arrival_date . '+'.$y.'days'));?></div>
	
	<div style="width:100%;margin-top:20px;clear: both;float: none;">
	<div style="width:50%;float:left;height:950px;">
	<img src="locations/<?php echo $loc_img_url;?>" width="100%" height="200px" style="float:left;background-size:cover;background-position:center center;object-fit:cover;">
	<?php $str_arr = explode (",", $attractions);  
 
foreach($str_arr as $key => $value){  
$sqlia3= "SELECT * FROM attractions WHERE id='$value'";
	$runia3=mysqli_query($con,$sqlia3) or die("SQL error");
	$noria3=mysqli_num_rows($runia3);
	while($rowia3=mysqli_fetch_array($runia3))
	{
		$img1=$rowia3['img1'];
		?>
	<img src="attractions/<?php echo $img1;?>" width="50%" height="200px" style="float:left;background-size:cover;background-position:center center;object-fit:cover;">
	<?php	}	?>
	<?php	}	?>
	</div>
	<div style="width:49%;float:left;padding:20px;">
	<h3><?php echo $loc;?></h3>
	<p><?php echo $loc_description;?></p>
	<br>
	<?php
		$str_arr = explode (",", $attractions);  
 
foreach($str_arr as $key => $value){ 
$sqlia3= "SELECT * FROM attractions WHERE id='$value'";
	$runia3=mysqli_query($con,$sqlia3) or die("SQL error");
	$noria3=mysqli_num_rows($runia3);
	while($rowia3=mysqli_fetch_array($runia3))
	{
		
		$att=$rowia3['name'];
		$att_description=$rowia3['description'];
		$att_img_url=$rowia3['img1'];
		?>

	<h4><?php echo $att;?></h4>
	<p><?php echo $att_description;?></p>
	<br>

	

	<?php	}	?>
	<?php	}	?>
	</div>
	
	</div>
	
	<div style="width:100%;padding:10px!important;background: #ff2400;color:#fff;font-weight: 700;font-size: 17px;clear: both;float: none;">Overnight Stay at <?php $sqliloc= "SELECT * FROM hotels WHERE id='$hotel'";
	$runiloc=mysqli_query($con,$sqliloc) or die("SQL error");
	$noriloc=mysqli_num_rows($runiloc);

	while($rowiloc=mysqli_fetch_array($runiloc))
	{
		echo $rowiloc['name'].' '.$rowiloc['star'].' Star' ;
	
		
	}  ?></div>
</page>
<?php $x++;} ?>
<page size="A4" style="padding:50px;">
<h2 style="text-align:left;color:#000;">Transportation</h2><br>
<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM book_itinery WHERE book_id='$book_id' AND id='$ref_num'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
$vehi_type=$rowid['vehi_type'];
$curruncy=$rowid['curruncy'];
$price=$rowid['price'];
$spe_note=$rowid['spe_note'];
}	?>
<?php

$sqlia3= "SELECT * FROM vehicles WHERE id='$vehi_type'";
	$runia3=mysqli_query($con,$sqlia3) or die("SQL error");
	$noria3=mysqli_num_rows($runia3);
	while($rowia3=mysqli_fetch_array($runia3))
	{
		
		$img1=$rowia3['img1'];
		$air_c=$rowia3['air_c'];
		$make_model=$rowia3['make_model'];
		$vehi_type=$rowia3['vehi_type'];
		$max_lug=$rowia3['max_lug'];
		$max_pass=$rowia3['max_pass'];
	}?>
	<div style="width:50%;float:left;height:100%;padding:20px;">
	<img src="vehicles/<?php echo $img1;?>">
	</div>
	
	<div style="width:49%;float:left;padding:50px;border:1px solid #000;">
	<ul style="font-size:16px; ">
		<li><b>Type of the Vehicle :</b> <?php echo $vehi_type;?></li>
		<li><b>Vehicle Model :</b> <?php echo $make_model;?></li>
		<li><b>Air COnditioned :</b> <?php echo $air_c;?></li>
		<li><b>Max Passengers :</b> <?php echo $max_pass;?></li>
		<li><b>Max Luggages :</b> <?php echo $max_lug;?></li>
	</ul>
	<br>
	

	</div>
	<div style="width:49%;float:left;padding:50px;border:1px solid #000;margin-top:20px">
	<ul style="font-size:16px; ">
		<li>We will allocate a best Englishspeaking driver who has all the relevant skills. </li>
		<li>Driver will pick you up you from the airport on time.</li>
		<li>Driver will be with you throughout the journey.</li>
		<li>He is registered with the company and having necessary documents.</li>
		<li>We will check the condition of the vehicle and health condition of the driver before starting the tour. </li>
		<li>We will send you the driver details 10 days prior to the arrival. </li>

	</ul>
	<br>
	

	</div>
</page>
<page size="A4" style="padding:50px;">
<h2 style="text-align:left;color:#000;">Price</h2><br>
<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM book_itinery WHERE book_id='$book_id' AND id='$ref_num'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
$vehi_type=$rowid['vehi_type'];
$curruncy=$rowid['curruncy'];
$price=$rowid['price'];
$spe_note=$rowid['spe_note'];
}	?>
<?php

$sqlia3= "SELECT * FROM vehicles WHERE id='$vehi_type'";
	$runia3=mysqli_query($con,$sqlia3) or die("SQL error");
	$noria3=mysqli_num_rows($runia3);
	while($rowia3=mysqli_fetch_array($runia3))
	{
		
		$img1=$rowia3['img1'];
		$air_c=$rowia3['air_c'];
		$make_model=$rowia3['make_model'];
		$vehi_type=$rowia3['vehi_type'];
		$max_lug=$rowia3['max_lug'];
		$max_pass=$rowia3['max_pass'];
	}?>
	<div style="width:50%;float:left;height:70%">
	<ul style="font-size:16px; ">
		<li><b>4 Star Hotel Price</b></li>
		<li><b>Per Person Price :</b> <?php echo $curruncy;?> <?php echo $price;?></li>
		<li><b>Total Price  :<?php echo $price;?> x <?php echo $tot_pass;?></b> <?php echo $price*$tot_pass;?></li>
		<li><b>Kid Charges are included</b></li>
		
	</ul>
	</div>
	
	<div style="width:49%;float:left;padding:10px;padding-left:50px;border:1px solid #000;">
	<h3>Inclusions</h3>
		<ul style="font-size:14px; ">
		<li>Airport pick up</li>
		<li>Accommodation for <?php echo $nights;?> nights – Half Board basis</li>
		<li>1st Class train tickets from Kandy to Nuwara Eliya</li>
		<li>Air-conditioned High Roof Van throughout the journey</li>
		<li>Kid charges are included </li>
		<li>Free Gem Factory & Spice Garden visit</li>
		<li>Best English-Speaking Driver </li>
		<li>Driver Bata & Fuel</li>
		<li>Parking tickets </li>
		<li>Highway charges</li>
		<li>All government taxes</li>
		<li>Water bottles on arrival</li>

	</ul>
	<br>
	

	</div>
	<div style="width:49%;float:left;padding:10px;padding-left:50px;border:1px solid #000;margin-top:20px">
	<h3>Exclusions</h3>
	<ul style="font-size:14px; ">
		<li>International Flights </li>
		<li>Airport Drop off</li>
		<li>Visa</li>
		<li>PCR tests before leaving (Not mandatory)</li>
		<li>Covid Travel Insurance (Not mandatory)</li>
		<li>Meals not mentioned in the itinerary </li>
		<li>Sightseeing Charges</li>
		<li>Camera & Video permits </li>
		<li>Driver Tip </li>

	</ul>
	<br>
	

	</div>
	<div style="width:100%;margin-top:30px;text-align:center;">
	<br>
	<h2 style="font-size:30px;width:100%;text-align:center;" >THANK YOU!</h2>
	</div>
</page>

	
   <!-- Jquery JS-->

    <script src="vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->

    <script src="vendor/bootstrap-4.1/popper.min.js"></script>

    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS       -->

    <script src="vendor/slick/slick.min.js">

    </script>

    <script src="vendor/wow/wow.min.js"></script>

    <script src="vendor/animsition/animsition.min.js"></script>

    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">

    </script>

    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>

    <script src="vendor/counter-up/jquery.counterup.min.js">

    </script>

    <script src="vendor/circle-progress/circle-progress.min.js"></script>

    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="vendor/chartjs/Chart.bundle.min.js"></script>

    <script src="vendor/select2/select2.min.js">

    </script>



    <!-- Main JS-->

    <script src="js/main.js"></script>



</body>



</html>