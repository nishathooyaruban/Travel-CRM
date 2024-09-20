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
                                        <strong>User Register Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_user.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control">
                                                   
                                                </div>
                                            </div>
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phone" placeholder="Phone" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="pass" placeholder="Password" class="form-control">
                                                    
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">User Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="user_type" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="executive">Executive</option>
                                                        
                                                    </select>
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