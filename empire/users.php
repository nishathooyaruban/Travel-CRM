<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Users table</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Postion</th>
                                                <th>Created On</th>
                                                <th>Status</th>
                                             
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM users";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $rowid['name']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $rowid['email']; ?></span>
                                                </td>
                                                <td class="desc"><?php echo $rowid['phone']; ?></td>
                                                <td class="desc"><?php echo $rowid['user_type']; ?></td>
                                                <td><?php echo $rowid['created_on']; ?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['status']; ?></span>
                                                </td>
                                               
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                       <form action="edit_user.php" method="POST">										<input type="hidden" value="<?php echo $rowid['id']; ?>" name="user_id">
                                                       <button type="submit" class="item btn-secondary mb-1">
											   <i class="zmdi zmdi-edit"></i>
										</button>      </form> 
                                                   
                                                      
                                                    </div>
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
                       
                  
                    </div>
                </div>
            </div>
        </div>
<?php include('config/footer.php');?>
