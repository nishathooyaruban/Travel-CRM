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

                                        <strong>Edit Hotel</strong>

                                    </div>

                                    <div class="card-body card-block">

                                        <form action="update_hotel.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                          
	<?php

										 include 'config/config.php'; 
										  $hot_id=$_POST['hot_id'];

$sqlid= "SELECT * FROM hotels WHERE id='$hot_id'";

	$runid=mysqli_query($con,$sqlid) or die("SQL error");

	$norid=mysqli_num_rows($runid);



	while($rowid=mysqli_fetch_array($runid))

	{ 
	
	$location=$rowid['location'];
	?>
                                        

											  <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Name</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                    <input type="text" id="text-input" name="name" placeholder="Name"  value="<?php echo $rowid['name']; ?>"class="form-control"> <input type="hidden" id="text-input" name="hot_id" placeholder="Name"  value="<?php echo $rowid['id']; ?>"class="form-control">

                                                   

                                                </div>

                                            </div>

											    <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Star grade</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <select name="star" class=" form-control-label">
												   <?php $star=$rowid['star'];?>
												 <?php  if($star=='0'){ ?>
													<option value="0" selected>0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star==''){ ?>
													<option value="0" selected>0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php } elseif($star=='01' OR $star=='1'){ ?>
													<option value="0" >0</option>
													<option value="01"selected>01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='02' OR $star=='2'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02"selected>02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='03' OR $star=='3'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03"selected>03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='04' OR $star=='4'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04"selected>04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='05' OR $star=='5'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05"selected>05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='06' OR $star=='6'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06"selected>06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='07' OR $star=='7'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07"selected>07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='08' OR $star=='8'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08"selected>08</option>
													<option value="09">09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='09' OR $star=='9'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09"selected>09</option>
													<option value="10">10</option>
												   <?php }elseif($star=='10' OR $star=='10'){ ?>
													<option value="0" >0</option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10"selected>10</option>
												   <?php } ?>
												   
												   
												   </select>

                                                   

                                                </div>

                                            </div>

                                          

                                          <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Description</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   

                                                   <textarea name="description"  class="form-control"><?php echo $rowid['description']; ?></textarea>

												   <input type="hidden" id="email-input" name="created_by" value="<?php echo $u_id; ?>" class="form-control">

                                                </div>

                                            </div>

                                           <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="text-input" class=" form-control-label">Location</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   <select class="form-control" name="location">

													<?php

									

$sqlil= "SELECT * FROM locations";

	$runil=mysqli_query($con,$sqlil) or die("SQL error");

	$noril=mysqli_num_rows($runil);



	while($rowil=mysqli_fetch_array($runil))

	{ 
	$name=$rowil['name'];
	if($name==$location) {?>

														<option value="<?php echo $rowil['name']; ?>" selected><?php echo $rowil['name']; ?></option>

	<?php }else{ ?>
	<option value="<?php echo $rowil['name']; ?>"><?php echo $rowil['name']; ?></option>
	<?php } ?>
	<?php } ?>

                                                    </select>

                                                   

                                                </div>

                                            </div>

                                             <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="file-input" class=" form-control-label">Hotel image</label>

                                                </div>

                                                <div class="col-12 col-md-9">

<img src="hotels/<?php echo $rowid['img_url']; ?>" style="width:100px;height:100px;object-fit:cover;">
                                                    <input type="file" id="file-input" name="img_url" class="form-control-file">
                                                    <input type="hidden" id="file-input" name="img_url_old" value="<?php echo $rowid['img_url']; ?>" class="form-control-file">
                                                </div>

                                            </div>

                                          

                                           
                                           
	<?php } ?>
                                            

                                            

                                            

                                      

                                       

                                    </div>

                                    <div class="card-footer">

                                        <button type="submit" class="btn btn-primary btn-sm">

                                            <i class="fa fa-dot-circle-o"></i> Update

                                        </button>

                                     
                                    </div>

									 </form>

                                </div>

                               

                            </div>

                            </div>

                            </div>

                            </div>

                         

		

		<?php include('config/footer.php');?>