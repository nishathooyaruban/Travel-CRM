<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Locations</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>name</th>
                                                <th>Description</th>
                                                <th>Location</th>
                                                <th>Image</th>
                                              
                                             
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM hotels";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $rowid['name']; ?></td>
                                               <td><?php echo $rowid['description']; ?></td>
                                               <td><?php echo $rowid['location']; ?></td>
                                               <td><img src="hotels/<?php echo $rowid['img_url']; ?>" style="width:100px;height:100px;object-fit:cover;"></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                      <form action="edit_hotel.php" method="POST">										<input type="hidden" value="<?php echo $rowid['id']; ?>" name="hot_id">                                                       <button type="submit" class="item btn-secondary mb-1">											   <i class="zmdi zmdi-edit"></i>										</button>      </form> 
                                                                                                          <form action="delete_hotel.php" method="POST">										<input type="hidden" value="<?php echo $rowid['id']; ?>" name="hot_id">                                                        <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">                                                            <i class="zmdi zmdi-delete"></i>                                                        </button>                                          </form>  
                                                      
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
		<!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Kandy</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
								zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
								resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
								genus Equus, along with other living equids.
							</p>
							<div class="image" style="float:left;">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" >
                                        </div>
								
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
<?php include('config/footer.php');?>
