<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   


       

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="title-1 m-b-25">Upcoming Bookings</h4>
                                <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Arrival</th>
								<th>status</th>
								<th>Days</th>
								<th>User</th>
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								date_default_timezone_set('Asia/colombo'); $created_on=date('Y-m-d');	
								//Non-admin users (like agents) only see upcoming bookings assigned to them.
								if($u_type !='admin'){
										$sqlid= "SELECT * FROM bookings WHERE assign_to='$u_id' ORDER BY arrival_date DESC";
											
								}
							  //	Admin users see a list of all upcoming bookings.

								else{
										$sqlid= "SELECT * FROM bookings ORDER BY arrival_date DESC";	
								}
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><span class="block-email"><?php echo $rowid['email']; ?></span></td>
								<td class="desc"><?php echo $rowid['phone']; ?></td>
								<td><span class="status--process"><?php echo $rowid['arrival_date']; ?></span></td>
								<td><span class="status--process"><?php echo $rowid['status']; ?></span></td>
								<td><?php echo $rowid['nod']; ?></td>
								<td><?php  $assign_to=$rowid['assign_to']; ?>
								
								<?php $sqlu= "SELECT * FROM  users WHERE id='$assign_to'";
								$runu=mysqli_query($con,$sqlu) or die("SQL error");
								$noru=mysqli_num_rows($runu);	while($rowu=mysqli_fetch_array($runu))	{ echo $rowu['name'];
								}
								?>	
								</td>
								<td><div class="table-data-feature"><form action="view_booking.php" method="GET">
								<input type="hidden" value="<?php echo $book_id=$rowid['id']; ?>" name="book_id">
								<button class="item" data-toggle="tooltip" data-placement="top" title="VIew">                                                           <i class="zmdi zmdi-zoom-in"></i></button>	
								</form>													                                                                                                          </div>
								</td>
								</tr>
								<?php
								$x=1;
								$sqlii= "SELECT * FROM book_itinery WHERE book_id='$book_id' AND status!='' ORDER BY created_by DESC";
								$runii=mysqli_query($con,$sqlii) or die("SQL error");
								$norii=mysqli_num_rows($runii);	while($rowii=mysqli_fetch_array($runii))	{ ?>											
								<tr style="background:#fff;"> <td><?php echo $x; ?></td>
								<td>Ref: <?php  $num=$rowii['id'];$num_padded = sprintf("%04d", $num);echo $num_padded; // returns 04
								?></td>
								<td>Days: <?php echo $rowii['nod']; ?></td>
								<td><?php echo $rowii['vehi_type']; ?></td>
								<td><?php echo $rowii['status']; ?></td>
								<td><?php echo $rowii['spe_note']; ?></td>
								<td></td>
								<td>
								<div class="table-data-feature">
								<form action="view_itinary.php" method="GET" target="_blank"><input type="hidden" value="<?php echo $book_id; ?>" name="book_id">														<input type="hidden" value="<?php echo $rowii['id']; ?>" name="ref_num">														<input type="hidden" value="<?php echo $rowii['vehi_type']; ?>" name="vehi_type">														<input type="hidden" value="<?php echo $rowii['nod']; ?>" name="nod">												<button class="item" data-toggle="tooltip" data-placement="top" title="VIew">                                                           <i class="zmdi zmdi-zoom-in"></i></button>														</form>
								</td>
								</div>
								</tr>
								<?php $x++;} ?>
								<tr class="spacer"><td colspan="7"><br></td></tr>
								<?php } ?>
								</tbody>
								</table>
								</div>
                            </div>
                          
                        </div>
                      
                  
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
<?php include('config/footer.php');?>
