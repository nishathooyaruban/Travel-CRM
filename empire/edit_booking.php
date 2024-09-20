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

                                        <strong>Edit Booking</strong>

                                    </div>

                                    <div class="card-body card-block">

                                        <form action="update_booking.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                          

                                      <?php
										 include 'config/config.php'; 
										 date_default_timezone_set('Asia/colombo');





 $created_on=date('Y-m-d');	
 $book_id=$_POST['book_id'];
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

                                                    <input type="text" id="text-input" name="name" value="<?php echo $rowid['name']; ?>" placeholder="Name" class="form-control"> <input type="hidden" id="text-input" name="book_id" value="<?php echo $book_id; ?>" placeholder="Name" class="form-control">

                                                   

                                                </div>

                                            </div>

											  <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Phone Number</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="text" id="text-input" name="phone" placeholder="Phone" value="<?php echo $rowid['phone']; ?>" class="form-control">

                                                   

                                                </div>

                                            </div>

                                            <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Email</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="email" id="email-input" name="email" placeholder="Enter Email" value="<?php echo $rowid['email']; ?>" class="form-control">

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Country</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                  <input type="text" name="country" placeholder="Country" value="<?php echo $rowid['country']; ?>" class="form-control">

                                                    

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Arrival Date</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="date" id="email-input" name="arrival_date"value="<?php echo $rowid['arrival_date']; ?>"  placeholder="Arrival Date" class="form-control">

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Number of Dates</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="number" id="email-input" name="nod"value="<?php echo $rowid['nod']; ?>"  placeholder="NOD" class="form-control">

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Adults</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="number" id="email-input" name="adults"value="<?php echo $rowid['adults']; ?>"  placeholder="Adults" class="form-control">

                                                   

                                                </div>

                                            </div>

                                          <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Children</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="number" id="email-input" name="children" value="<?php echo $rowid['children']; ?>" placeholder="Children" class="form-control">

                                                   

                                                </div>

                                            </div>

											<div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Babies</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="number" id="email-input" name="babies" value="<?php echo $rowid['babies']; ?>" placeholder="Babies" class="form-control">

													<input type="hidden" id="email-input" name="created_by" value="<?php echo $u_id; ?>" class="form-control">

                                                   

                                                </div>

                                            </div>

                                          <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Assign To</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <select name="assign_user" class="form-control">
												<?php  $assign_to=$rowid['assign_to']; ?>
								
												<?php $sqlu= "SELECT * FROM  users";
												$runu=mysqli_query($con,$sqlu) or die("SQL error");
												$noru=mysqli_num_rows($runu);	while($rowu=mysqli_fetch_array($runu))	{
												$assign_user=$rowu['id'];
												if($assign_to==$assign_user){	
												?>
												<option value="<?php echo $rowu['id']; ?>" selected><?php echo $rowu['name']; ?></option>
												
												<?php }else{ ?>	
												<option value="<?php echo $rowu['id']; ?>" ><?php echo $rowu['name']; ?></option>
												<?php } ?>	
												<?php } ?>	
												</select>

													<input type="hidden" id="email-input" name="created_by" value="<?php echo $u_id; ?>" class="form-control">

                                                   

                                                </div>

                                            </div>

                                          

                                            <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="email-input" class=" form-control-label">Description</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <textarea  name="description" placeholder="Description" class="form-control"><?php echo $rowid['description']; ?></textarea>

                                                   

                                                </div>

                                            </div>

                                          

                                           
	<?php } ?>
                                          

                                           

                                            

                                            

                                            

                                      

                                       

                                    </div>

                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm">

                                            <i class="fa fa-dot-circle-o"></i> Update

                                        </button>

                                      

                                    </div>

                                </div> </form>

                               

                            </div>

                            </div>

                            </div>

                            </div>

                         

		

		<?php include('config/footer.php');?>