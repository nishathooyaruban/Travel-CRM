<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  margin: 50px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="st/theme.css">
	<link rel="stylesheet" type="text/css" href="st/carbon.css">

	
    <script src="vendor/jquery-3.2.1.min.js"></script>
	<script>
$('#regForm').on('submit', function (event, force) {
    if (!force) {
        var $this = $(this);
        event.preventDefault();
        setTimeout(function () {
            $this.trigger('submit', true);
        }, 5000);
    }
});
$("#regForm input").click(function(e) {
    e.preventDefault();
    setTimeout(function() { $("#regForm").submit(); }, 5000);
});

</script>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Edit Itinery</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Reference</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>NOD</th>
												 <th>Arrival</th>
                                                
                                               
                                                <th>status</th>
                                             
                                            </tr>
                                        </thead>
										<form id="regForm" action="update_itinery.php" method="POST">
                                        <tbody>
										<?php
										 include 'config/config.php'; 
										 $book_id=$_POST['book_id'];
$sqlid= "SELECT * FROM bookings WHERE id='$book_id'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php  
												$num=$_POST['ref_num'];
$num_ref = sprintf("%04d", $num);
echo $num_ref; // returns 04
												?>
												</td>
                                                <td><?php echo $rowid['name']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $rowid['email']; ?></span>
                                                </td>
                                                <td class="desc"><?php echo $rowid['phone']; ?></td>
                                                <td><?php echo $nod=$_POST['nod']; ?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['arrival_date']; ?></span>
                                                </td>
                                                <td>
                                                    <span class="status--process"><?php  $status=$rowid['status']; ?>
													
													<select name="itinary_status">
													<?php if($status=='PENDING'){?>
													<option value="PENDING" selected>PENDING</option>
													<option value="CONFIRMED">CONFIRMED</option>
													<option value="CANCELLED">CANCELLED</option>
													<?php } ?><?php if($status=='CONFIRMED'){?>
													<option value="PENDING" >PENDING</option>
													<option value="CONFIRMED"selected>CONFIRMED</option>
													<option value="CANCELLED">CANCELLED</option>
													<?php } ?>
													<?php if($status=='CANCELLED'){?>
													<option value="PENDING" >PENDING</option>
													<option value="CONFIRMED">CONFIRMED</option>
													<option value="CANCELLED"selected>CANCELLED</option>
													<?php } ?>
													</select></span>
                                                </td>
                                               
                                              
                                            </tr>
                                            <tr class="spacer"></tr> 
	<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
						
						<input type="hidden" value="<?php echo $nod = sprintf("%02d", $nod); ?>" name="nod" style="width:100px;border:none;" readonly>
						<input type="hidden" value="<?php echo $book_id; ?>" name="book_id" style="width:100px;border:none;" readonly>
						<input type="hidden" value="<?php echo $num_ref; ?>" name="num_ref" style="width:100px;border:none;" readonly>
						<input type="hidden" value="<?php echo $u_id; ?>" name="created_by" style="width:100px;border:none;" readonly>
						<?php
						$x=1;
						$sqlidi= "SELECT * FROM itinery WHERE book_id='$book_id' AND ref_num='$num' ";
	$runidi=mysqli_query($con,$sqlidi) or die("SQL error");
	 $noridi=mysqli_num_rows($runidi);

	while($rowidi=mysqli_fetch_array($runidi))
	{ 
$nod=$rowidi['nod'];
$id=$rowidi['id'];
$location=$rowidi['location'];
 $attractions=$rowidi['attractions'];
$hotel01=$rowidi['hotel01'];
$special_note=$rowidi['special_note'];


//$num_padded =$nod;
$num_padded = sprintf("%02d", $x);
?>

<div class="col-md-12 " style="margin-top:20px; background:#fff;">
<input type="hidden" value="<?php echo $id; ?>" name="row_id<?php echo $num_padded; ?>" style="width:100px;border:none;" readonly>
<div style="background:#f7f7f7;;padding:10px;width:100%"><b>Day:<input type="number" id="<?php echo $num_padded; ?>"value="<?php echo $num_padded; ?>" name="" style="width:100px;border:none;font-weight:bold;background:#f7f7f7;" readonly></b></div>
   <div class="row" style="background:#fff;margin-bottom:20px;padding-top:10px;">
   <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  .left_list{    padding-left: 20px;}
  .list-group-item {
    position: relative;
    display: block;
    padding: 5px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}
.list-group-item:hover {
    z-index: 0;
    cursor: grab;
}
  </style>

							<div class="col-md-12 table-responsive ">
								<table class="table" id="myTable<?php echo $num_padded; ?>">
								<tr>
									<th style="width:30%">Location</th>
									<th style="width:70%">Attractions</th>	
									
								</tr>
								<tr>
									<td><?php
										
$sqlid= "SELECT * FROM locations WHERE id='$location'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 

										?>
										
										<label><input type="radio" name="location<?php echo $num_padded; ?>" class="location<?php echo $num_padded; ?>" id="<?php echo $rowid['id']; ?>" value="<?php echo $rowid['id']; ?>" style="float: left; width: auto;  margin-top: 6px; margin-right: 10px;"checked="checked" > <span style="float:left"><?php echo $rowid['name']; ?></span></label><br>
									
										
								
										<?php } ?> 
										<?php
										
$sqlid= "SELECT * FROM locations WHERE id!='$location'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 

										?>
										
										<label><input type="radio" name="location<?php echo $num_padded; ?>" class="location<?php echo $num_padded; ?>" id="<?php echo $rowid['id']; ?>" value="<?php echo $rowid['id']; ?>" style="float: left; width: auto;  margin-top: 6px; margin-right: 10px;"> <span style="float:left"><?php echo $location_name=$rowid['name']; ?></span></label><br>
									
										
								
										<?php } ?> 
										
										
										</td>
									<td class="tb_ser">
									<input type="text" id="myInput<?php echo $num_padded; ?>" style="width:50%;" onkeyup="myFunction()" placeholder="Search for an Attraction." title="Type in an Item">
									<br>
									<div class="table-responsive" id="order_table<?php echo $num_padded; ?>"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="st/theme.css">
	<link rel="stylesheet" type="text/css" href="st/carbon.css">


		<div id="shared-lists" class="col-md-12">
	
	<div id="example2-right<?php echo $num_padded; ?>" class="list-group col right_list">
									
									<h6><b>Selected Attractions</b></h6>

	<?php
	     $attractions;
		$str_arr = explode (",", $attractions);  
 
						foreach($str_arr as $key => $value){ 
$sqlia2= "SELECT * FROM attractions WHERE id='$value'";
	$runia2=mysqli_query($con,$sqlia2) or die("SQL error");
	$noria2=mysqli_num_rows($runia2);
	while($rowia2=mysqli_fetch_array($runia2))
	{?>
<div class="list-group-item"><label><input type="checkbox" name="attraction<?php echo $num_padded; ?>[]" id="att<?php echo $rowia2['id']; ?>"  value="<?php echo $rowia2['id']; ?>" style="float: left; width: auto;  margin-top: 6px; margin-right: 10px;" checked="checked"> <span style="float:left"><?php echo $rowia2['location'].'-'.$rowia2['name']; ?></span></label></div>


					<?php	}	?>
					<?php	}	?>
					</div>
					</div>
<script>
$(document).ready(function(){
  $("#myInput<?php echo $num_padded; ?>").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable<?php echo $num_padded; ?> .left_list .list-group-item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<div class="col-md-12">
								<h4>Accomadation</h4>
								<table class="table">

							<tr><th >Hotel</th></tr>
							<tr><td>
							
							<select name="hotel01<?php echo $num_padded; ?>"class="form-control">
							
							<?php
$sqlid= "SELECT * FROM hotels  WHERE location='$location_name'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
$hotel=$rowid['id'];
if($hotel01==$hotel){
							?>
							<option  value="<?php echo $rowid['id']; ?>" selected><?php echo $rowid['name'].' '.$rowid['star']; ?> Star</option>
							<?php }else{ ?>
							<option  value="">Select Hotel</option>
								<option  value="<?php echo $rowid['id']; ?>"><?php echo $rowid['name'].' '.$rowid['star']; ?> Star</option>
							<?php } ?>
							<?php } ?>
							</select>
							</td></tr>
															</table>
								</div>	
									</div>
</td>

									
								</tr></table>

									
								
									
		

		

						
							
								
							</div>
						
					   </div>

<script>
$(document).ready(function(){
  $("#myInputh<?php echo $num_padded; ?>").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable<?php echo $num_padded; ?> tr.tb_ser").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  	<script>  
 $(document).ready(function(data){  
 
      $(document).on('click', '.location<?php echo $num_padded; ?>', function(){  
           var location_id = $(this).attr("id");  
           var num_padded = $('#<?php echo $num_padded; ?>').val();   
		//  alert(num_padded);
		
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{
					 location_id:location_id,
					 num_padded:num_padded
					
					 },  
					
                     success:function(data){  
                          $('#order_table<?php echo $num_padded; ?>').html(data.order_table);  
                        
                     }  
                });  
          
      });  
 
	 
 });  
 </script>


</div>


                     
<?php $x++;} ?>      
<div class="col-md-12 tab" style="margin-top:20px; background:#fff;padding-top:20px;padding-bottom:20px;">


								<h5><b>Vehicle type</b></h5><br>
								<select name="vehi_type"  class="form-control">
								
								<?php
										
$sqlib= "SELECT * FROM book_itinery WHERE id='$num'";
	$runib=mysqli_query($con,$sqlib) or die("SQL error");
	$norib=mysqli_num_rows($runib);

	while($rowib=mysqli_fetch_array($runib))
	{ 
$vehi_type=$rowib['vehi_type'];
$spe_note=$rowib['spe_note'];
$curruncy=$rowib['curruncy'];
$price=$rowib['price'];
	}
										?>
								<?php
										
$sqliv= "SELECT * FROM vehicles";
	$runiv=mysqli_query($con,$sqliv) or die("SQL error");
	$noriv=mysqli_num_rows($runiv);

	while($rowiv=mysqli_fetch_array($runiv))
	{ 
$vid= $rowiv['id'];
if($vid==$vehi_type){
										?>
								<option value="<?php echo $rowiv['id']; ?>" selected><?php echo $rowiv['make_model']; ?></option>
<?php }else{ ?>
		<option value="<?php echo $rowiv['id']; ?>" ><?php echo $rowiv['make_model']; ?></option>
	<?php } ?>
	<?php } ?>
								
						</select>
							<br>
							<h4>Pricing Plan</h4>
								
											 <div class="row form-group" style="background:#fff;padding:10px">
                                               
                                                <div class="col-12 col-md-9">
                                                    <input type="number" placeholder="Amount" name="price" class="form-control-label" value="<?php echo $price;?>" style="width:30%;float:left;"step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
">
                                                    <input type="text"  name="curruncy" placeholder="Curruncy" value="<?php echo $curruncy;?>" style="width:30%;float:left;" class="form-control-label">
												
                                                </div>
                                            </div>
							<br>
						<h5><b>Special Note For Whole Tour</b></h5>
								
									<textarea name="spe_note"style="border:1px solid #ddd;width:100%;height:200px;"><?php echo $spe_note;?></textarea>
					   </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;display:none;">
<?php
$sqlid= "SELECT COUNT(id) AS nod FROM itinery WHERE book_id='$book_id' AND ref_num='$num' ";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 

	$step=$rowid['nod'];
	}
	$step=$step+1;
for ($x = 1; $x <= $step; $x++) {

?>
  <span class="step"></span>
  
  <?php } ?>  
</div>   
</div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

$('form').submit( function(event) {
    var formId = this.id,
        form = this;
    mySpecialFunction(formId);

    event.preventDefault();

    setTimeout( function () { 
        form.submit();
    }, 3000);
}); 

</script>
                    </div>
                </div>
            </div>
        </div>
<?php include('config/footer.php');?>
