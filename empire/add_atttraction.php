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
                                        <strong>Add Atttraction</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_attraction.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control">
                                                   
                                                </div>
                                            </div> <div class="row form-group">
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
                                                    <label for="text-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                   <textarea  name="description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="img1" class="form-control-file">
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
                                </div>
                                </form>
                            </div>
                            </div>
                            </div>
                            </div>
                         
		
		<?php include('config/footer.php');?>