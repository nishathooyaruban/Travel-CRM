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
                                        <strong>Add Hotel</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_hotel.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control">
                                                   
                                                </div>
                                            </div>
											    <div class="row form-group">                                                <div class="col col-md-3">                                                    <label for="text-input" class=" form-control-label">Star grade</label>                                                </div>                                                <div class="col-12 col-md-9">                                                   <select name="star" class=" form-control-label">													<option value="0">0</option>													<option value="01">01</option>													<option value="02">02</option>													<option value="03">03</option>													<option value="04">04</option>													<option value="05">05</option>													<option value="06">06</option>													<option value="07">07</option>													<option value="08">08</option>													<option value="09">09</option>													<option value="10">10</option>												   </select>                                                                                                   </div>                                            </div>
                                          
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                   <textarea name="description"  class="form-control"></textarea>
												   <input type="hidden" id="email-input" name="created_by" value="<?php echo $u_id; ?>" class="form-control">
                                                </div>
                                            </div>
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="location">
													<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM locations";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
														<option value="<?php echo $rowid['name']; ?>"><?php echo $rowid['name']; ?></option>
	<?php } ?>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Hotel image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="banner" class="form-control-file">
                                                </div>
                                            </div>
                                          
                                           
                                            
                                            
                                            
                                      
                                       
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
									 </form>
                                </div>
                               
                            </div>
                            </div>
                            </div>
                            </div>
                         
		
		<?php include('config/footer.php');?>