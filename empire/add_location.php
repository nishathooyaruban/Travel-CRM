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
                                        <strong>Add Location</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_location.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Text" class="form-control">
                                                   
                                                </div>
                                            </div>
											  
                                          
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
                                                    <label for="file-input" class=" form-control-label">Banner image</label>
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