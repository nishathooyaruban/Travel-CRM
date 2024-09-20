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
                                        <strong>Add Vehicle</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_vehicle.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Make and Model</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="make_model" placeholder="Make and Model" class="form-control">
                                                   
                                                </div>
                                            </div> <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Vehicle Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="vehi_type">
													
									
														<option value="Car">Car</option>
														<option value="Van">Van</option>
														<option value="SUV">SUV</option>
														<option value="Mini Bus">Mini Bus</option>
	
                                                    </select>
                                                   
                                                </div>
                                            </div>
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Airconditioned</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="air_c">
													
									
														<option value="Yes">Yes</option>
														<option value="No">No</option>
														
	
                                                    </select>
                                                   
                                                </div>
                                            </div>
											  
                                          
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Max Passengers</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                   <input type="number"  name="max_pass" class="form-control">
                                                </div>
                                            </div>
											 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Max Luggages</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                   <input type="number"  name="max_lug" class="form-control">
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