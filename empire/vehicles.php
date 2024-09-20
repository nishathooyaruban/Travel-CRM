<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   
	
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Attractions</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Make & Model</th>
                                                <th>Vehicle Type</th>
                                                <th>Max Passengers</th>
                                                <th>Max Luggages</th>
                                                <th>Airconditined</th>
                                              
                                             
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM vehicles";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $rowid['make_model']; ?></td>
                                               <td><?php echo $rowid['vehi_type']; ?></td>
                                               <td><?php echo $rowid['max_pass']; ?></td>
                                               <td><?php echo $rowid['max_lug']; ?></td>
                                               <td><?php echo $rowid['air_c']; ?></td>
                                               <td><img src="vehicles/<?php echo $rowid['img1']; ?>" style="width:100px;height:100px;object-fit:cover;float:left;">
											  
											   </td>
                                                <td>
                                                    <div class="table-data-feature">       <form action="edit_vehicle.php" method="POST">										<input type="hidden" value="<?php echo $rowid['id']; ?>" name="att_id">
                                                       <button type="submit" class="item btn-secondary mb-1">
											   <i class="zmdi zmdi-edit"></i>
										</button>      </form> 
                                                        
                                                   <form action="delete_vehicle.php" method="POST">										<input type="hidden" value="<?php echo $rowid['id']; ?>" name="att_id">                                                        <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">                                                            <i class="zmdi zmdi-delete"></i>                                                        </button>                                          </form>  
                                                      
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
		
			<!-- end modal medium -->

<?php include('config/footer.php');?>
