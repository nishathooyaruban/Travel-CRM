<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Bookings table</h3>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                
												 <th>Arrival</th>
                                                
                                               
                                                <th>status</th>
                                                <th>NOD</th>
												<?php if($u_type =='admin'){ ?>
												<th>User</th>
												<?php } ?>
                                             <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										 include 'config/config.php'; 
										 date_default_timezone_set('Asia/colombo');





 $created_on=date('Y-m-d');	
if($u_type !='admin'){
										$sqlid= "SELECT * FROM bookings WHERE assign_to='$u_id' ORDER BY arrival_date DESC";	
								}else{
										$sqlid= "SELECT * FROM bookings ORDER BY arrival_date DESC";	
								}
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow" style="background:#fff;">
                                              
                                                <td><?php echo $rowid['name']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $rowid['email']; ?></span>
                                                </td>
                                                <td class="desc"><?php echo $rowid['phone']; ?></td>
                                               
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['arrival_date']; ?></span>
                                                </td>
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['status']; ?></span>
                                                </td>
                                                <td>
												<div class="table-data-feature">
												<form action="save_itinery.php" method="POST" >
												<b>Days</b>
												<input type="number" name="nod" value="<?php echo $rowid['nod']; ?>" style="width:50px;float:left;margin-right:5px;border:1px solid #000;padding-left: 5px;" required>
											
												<input type="hidden" value="<?php echo $book_id=$rowid['id']; ?>" name="book_id">                                                        
												<input type="hidden" value="<?php echo $u_id; ?>" name="created_by">                                                        
												<button  style="float:left;" class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Create itinery">                                                            <i class="zmdi zmdi-plus"></i>                                                        </button>														</form>
												 </div>
												</td>
												   <?php if($u_type =='admin'){ ?><td>
												<div class="table-data-feature">
												<form action="user_itinery.php" method="POST" >
												<b>Assign User</b><br/>
												<select name="assign_user">
												<?php  $assign_to=$rowid['assign_to']; ?>
								
												<?php $sqlu= "SELECT * FROM  users";
												$runu=mysqli_query($con,$sqlu) or die("SQL error");
												$noru=mysqli_num_rows($runu);	while($rowu=mysqli_fetch_array($runu))	{
												$assign_user=$rowu['id'];
												if($assign_to==$assign_user){	
												?>
												<option value="<?php echo $rowu['id']; ?>" selected><?php echo $rowu['name']; ?></option>
												
												<?php }else{ ?>	
												<option value="<?php echo $rowu['id']; ?>" ><?php echo $rowu['name']; ?></option>
												<?php } ?>	
												<?php } ?>	
												</select>
											
												<input type="hidden" value="<?php echo $book_id=$rowid['id']; ?>" name="book_id">                                                        
												<input type="hidden" value="<?php echo $u_id; ?>" name="created_by">                                                        
												<button  style="float:left;" class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Assign User">                                                            <i class="zmdi zmdi-edit"></i>                                                        </button>														</form>
												 </div>
												</td>
												<?php } ?>	
                                                <td>
                                                    <div class="table-data-feature">
													<form action="view_booking.php" method="GET">
														
														<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
														
												<button class="item" data-toggle="tooltip" data-placement="top" title="VIew">
                                                           <i class="zmdi zmdi-zoom-in"></i>
                                                        </button>
														</form>
													<form action="edit_booking.php" method="POST">
														
														<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
														<button class="item" data-toggle="tooltip" data-placement="top" type="submit"title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
														
														</form>
														<?php if($u_type =='admin'){ ?>
                                                        <form action="delete_booking.php" method="POST">
														<input type="hidden" value="<?php echo $rowid['id']; ?>" name="book_id">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</form>
															<?php } ?>	
                                                      
                                                    </div>
                                                </td>
                                            </tr>
											<?php
											$x=1;
											$sqlii= "SELECT * FROM book_itinery WHERE book_id='$book_id' AND status!=''										ORDER BY created_by DESC";
	$runii=mysqli_query($con,$sqlii) or die("SQL error");
	$norii=mysqli_num_rows($runii);

	while($rowii=mysqli_fetch_array($runii))
	{ 
?>
											<tr style="background:#fff;">
                                                 <td><?php echo $x; ?></td>
                                          
                                                <td>Ref: <?php  $num=$rowii['id'];
$num_padded = sprintf("%04d", $num);
echo $num_padded; // returns 04
												?></td>
                                                <td>Days: <?php echo $rowii['nod']; ?></td>
                                                <td><?php echo $rowii['vehi_type']; ?></td>
                                                <td><?php echo $rowii['status']; ?></td>
                                                <td><?php echo $rowii['spe_note']; ?></td>
												<?php if($u_type =='admin'){ ?>
                                                <td></td>
												<?php } ?>	
                                                <td>
												<div class="table-data-feature">
												<form action="view_itinary.php" method="GET" target="_blank">
														
														<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
														<input type="hidden" value="<?php echo $rowii['id']; ?>" name="ref_num">
														<input type="hidden" value="<?php echo $rowii['vehi_type']; ?>" name="vehi_type">
														<input type="hidden" value="<?php echo $rowii['nod']; ?>" name="nod">
												<button class="item" data-toggle="tooltip" data-placement="top" title="VIew">
                                                           <i class="zmdi zmdi-zoom-in"></i>
                                                        </button>
														</form>
														<form action="edit_itinery.php" method="POST">
														
														<input type="hidden" value="<?php echo $book_id; ?>" name="book_id">
														<input type="hidden" value="<?php echo $rowii['id']; ?>" name="ref_num">
														<input type="hidden" value="<?php echo $rowii['vehi_type']; ?>" name="vehi_type">
														<input type="hidden" value="<?php echo $rowii['nod']; ?>" name="nod">
														<button class="item" data-toggle="tooltip" data-placement="top" type="submit"title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
														
														</form>
														
														<form action="delete_tour.php" method="POST">
														<input type="hidden" value="<?php echo $rowii['id']; ?>" name="ref_num">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
														</form>
														
														</td>
                                              </div>
                                            </tr>
												<?php $x++;} ?>
                                            <tr class="spacer"><td colspan="7"><br></td></tr> 
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
