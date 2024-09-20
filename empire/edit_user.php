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
                                        <strong>Edit User Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="update_user.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                          
                                        										<?php

										 include 'config/config.php'; 
										  $user_id=$_POST['user_id'];

$sqlid= "SELECT * FROM users WHERE id='$user_id'";

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
                                                    <input type="text" id="text-input" name="name" placeholder="Name"value="<?php echo $rowid['name']; ?>" class="form-control">
                                                   <input type="hidden" value="<?php echo $rowid['id']; ?>" name="user_id">
                                                </div>
                                            </div>
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phone" placeholder="Phone"value="<?php echo $rowid['phone']; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" placeholder="Enter Email"value="<?php echo $rowid['email']; ?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="pass"value="<?php echo $rowid['pass']; ?>" placeholder="Password" class="form-control">
                                                    
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">User Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="user_type" id="select" class="form-control">
													<?php if($rowid['user_type']=='admin'){ ?>
                                                        <option value="0">Please select</option>
                                                        <option value="admin" selected>Admin</option>
                                                        <option value="executive">Executive</option>
                                                        <?php } ?>   
<?php if($rowid['user_type']=='executive'){ ?>
                                                        <option value="0">Please select</option>
                                                        <option value="admin" >Admin</option>
                                                        <option value="executive"selected>Executive</option>
                                                        <?php } ?>    
<?php if($rowid['user_type']==''){ ?>
                                                        <option value="0">Please select</option>
                                                        <option value="admin" >Admin</option>
                                                        <option value="executive">Executive</option>
                                                        <?php } ?>  														
                                                    </select>
                                                </div>
                                            </div>
                                          
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">User Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="status" id="select" class="form-control">
													<?php if($rowid['status']=='ENABLE'){ ?>
                                                      
                                                        <option value="ENABLE" selected>ENABLE</option>
                                                        <option value="DISABLE">DISABLE</option>
                                                        <?php } ?>   
<?php if($rowid['status']=='DISABLE'){ ?>
                                                       <option value="ENABLE" >ENABLE</option>
                                                        <option value="DISABLE"selected>DISABLE</option>
                                                        <?php } ?>    
<?php if($rowid['status']==''){ ?>
                                                           <option value="ENABLE" >ENABLE</option>
                                                        <option value="DISABLE">DISABLE</option>
                                                        <?php } ?>  														
                                                    </select>
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