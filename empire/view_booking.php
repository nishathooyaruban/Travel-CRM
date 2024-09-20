<?php include('config/header.php');?>   

<?php include('config/side_menu.php');?>   

   <!-- PAGE CONTAINER-->

        



            <!-- MAIN CONTENT-->

            <div class="main-content">

                <div class="section__content section__content--p30">

                    <div class="container-fluid">

                        <div class="row">

                          

                           

                            <div class="col-lg-12">

                                <div class="card">

                                    <div class="card-header">

                                        <strong>View Booking</strong>

                                    </div>

                                    <div class="card-body card-block">

                                    

                                          

                                      <?php
										 include 'config/config.php'; 
										 date_default_timezone_set('Asia/colombo');





 $created_on=date('Y-m-d');	
 $book_id=$_GET['book_id'];
$sqlid= "SELECT * FROM bookings WHERE id='$book_id'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>  

											  <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Name</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <?php echo $rowid['name']; ?>

                                                   

                                                </div>

                                            </div>

											  <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Phone Number</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                  <?php echo $rowid['phone']; ?>

                                                   

                                                </div>

                                            </div>

                                            <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Email</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <?php echo $rowid['email']; ?>

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Country</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                  <?php echo $rowid['country']; ?>

                                                    

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Arrival Date</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                  <?php echo $rowid['arrival_date']; ?>

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Number of Dates</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <?php echo $rowid['nod']; ?>

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Adults</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <?php echo $rowid['adults']; ?>

                                                   

                                                </div>

                                            </div>

                                          <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Children</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <?php echo $rowid['children']; ?>

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Babies</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                  <?php echo $rowid['babies']; ?>

													<input type="hidden" id="email-input" name="created_by" value="<?php echo $u_id; ?>" class="form-control">

                                                   

                                                </div>

                                            </div>

                                          

                                          

                                            <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Description</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <?php echo $rowid['description']; ?>

                                                   

                                                </div>

                                            </div>

                                          

                                           
	<?php } ?>
	  <table class="table">
                                   	<?php
											$x=1;
											$sqlii= "SELECT * FROM book_itinery WHERE book_id='$book_id' AND status!=''										ORDER BY created_by DESC";
	$runii=mysqli_query($con,$sqlii) or die("SQL error");
	$norii=mysqli_num_rows($runii);

	while($rowii=mysqli_fetch_array($runii))
	{ 
?>
											<tr style="background:#fff;">
                                                 <td><?php echo $x; ?></td>
                                          
                                                <td>Ref Number: <?php  $num=$rowii['id'];
$num_padded = sprintf("%04d", $num);
echo $num_padded; // returns 04
												?></td>
                                                <td>Days: <?php echo $rowii['nod']; ?></td>
                                                <td><?php echo $rowii['vehi_type']; ?></td>
                                                <td><?php echo $rowii['status']; ?></td>
                                                <td><?php echo $rowii['spe_note']; ?></td>
                                                <td>
												<div class="table-data-feature">
												<form action="view_itinary.php" method="GET" target="_blank">
														
														<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
														<input type="hidden" value="<?php echo $rowii['id']; ?>" name="ref_num">
														<input type="hidden" value="<?php echo $rowii['vehi_type']; ?>" name="vehi_type">
														<input type="hidden" value="<?php echo $rowii['nod']; ?>" name="nod">
												<button class="item" data-toggle="tooltip" data-placement="top" title="VIew">
                                                           <i class="zmdi zmdi-zoom-in"></i>
                                                        </button>
														</form>
													
														</td>
                                              </div>
                                            </tr>
												<?php $x++;} ?>       

                                           

                                      </table>      

                                            

                                            

                                      

                                       

                                    </div>

                             

                                </div> 
                               

                            </div>

                            </div>

                            </div>

                            </div>

                         

		

		<?php include('config/footer.php');?>