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

                                        <strong>Edit Atttraction</strong>

                                    </div>

                                    <div class="card-body card-block">

                                        <form action="update_vehicle.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                          

                                        										<?php

										 include 'config/config.php'; 
										  $att_id=$_POST['att_id'];

$sqlid= "SELECT * FROM vehicles WHERE id='$att_id'";

	$runid=mysqli_query($con,$sqlid) or die("SQL error");

	$norid=mysqli_num_rows($runid);



	while($rowid=mysqli_fetch_array($runid))

	{ 
	
	$location=$rowid['location'];
	?>

											  <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Make & Model</label>

                                                </div>

                                                <div class="col-12 col-md-9">
<input type="hidden" value="<?php echo $rowid['id']; ?>" name="vehi_id">
                                                    <input type="text" id="text-input" name="make_model" placeholder="make_model" value="<?php echo $rowid['make_model']; ?>" class="form-control">

                                                   

                                                </div>

                                            </div> <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Vehicle Type</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <select class="form-control" name="vehi_type">

													<?php
													$vehi_type=$rowid['vehi_type'];
													if($vehi_type=="Car") {?>

														<option value="Car" selected>Car</option>
														<option value="Van">Van</option>
														<option value="SUV">SUV</option>
														<option value="Mini Bus">Mini Bus</option>

	
	<?php } ?>
	<?php if($vehi_type=="Van") {?>

														<option value="Car" >Car</option>
														<option value="Van" selected>Van</option>
														<option value="SUV">SUV</option>
														<option value="Mini Bus">Mini Bus</option>

	
	<?php } ?>
	<?php if($vehi_type=="SUV") {?>

														<option value="Car" >Car</option>
														<option value="Van" >Van</option>
														<option value="SUV" >SUV</option>
														<option value="Mini Bus">Mini Bus</option>

	
	<?php } ?>
	<?php if($vehi_type=="Mini Bus") {?>

														<option value="Car" >Car</option>
														<option value="Van" >Van</option>
														<option value="SUV" >SUV</option>
														<option value="SUV" >SUV</option>
														<option value="Mini Bus" selected>Mini Bus</option>

	
	<?php } ?>

                                                    </select>

                                                   

                                                </div>

                                            </div>

											  
  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Airconditioned</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="air_c">
													<?php
													$air_c=$rowid['air_c'];
													if($air_c=="Yes") {?>
									
														<option value="Yes"selected >Yes</option>
														<option value="No">No</option>
														<?php } ?>
														<?php
													if($air_c=="No") {?>
									
														<option value="Yes" >Yes</option>
														<option value="No" selected>No</option>
														<?php } ?>
														
	
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                          

                                          <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Max Passengers</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   

                                                  <input type="text" id="text-input" name="max_pass" placeholder="max_pass" value="<?php echo $rowid['max_pass']; ?>" class="form-control">

                                                </div>

                                            </div>
											 <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Max Luggages</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   

                                                  <input type="text" id="text-input" name="max_lug" placeholder="max_lug" value="<?php echo $rowid['max_lug']; ?>" class="form-control">

                                                </div>

                                            </div>

                                            

                                             <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="file-input" class=" form-control-label">Image</label>

                                                </div>

                                                <div class="col-12 col-md-9">
<img src="http://localhost/<?php echo $rowid['img1']; ?>" style="width:100px;height:100px;object-fit:cover;float:left;">
                                                    <input type="file" id="file-input" name="img1" class="form-control-file">
                                                    <input type="hidden" id="file-input" name="img1_old" value="<?php echo $rowid['img1']; ?>" class="form-control-file">

                                                </div>

                                            </div>

											

                                          

                                           
	<?php } ?>

                                            

                                            

                                            

                                      

                                       

                                    </div>

                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm">

                                            <i class="fa fa-dot-circle-o"></i> Submit

                                        </button>

                                 

                                    </div>

                                </div>

                                </form>

                            </div>

                            </div>

                            </div>

                            </div>

                         

		

		<?php include('config/footer.php');?>