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

                                        <strong>Edit Atttraction</strong>

                                    </div>

                                    <div class="card-body card-block">

                                        <form action="update_attraction.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                          

                                        										<?php

										 include 'config/config.php'; 
										  $att_id=$_POST['att_id'];

$sqlid= "SELECT * FROM attractions WHERE id='$att_id'";

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
<input type="hidden" value="<?php echo $rowid['id']; ?>" name="att_id">
                                                    <input type="text" id="text-input" name="name" placeholder="Name" value="<?php echo $rowid['name']; ?>" class="form-control">

                                                   

                                                </div>

                                            </div> <div class="row form-group">

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

                                                    <label for="text-input" class=" form-control-label">Description</label>

                                                </div>

                                                <div class="col-12 col-md-9">

                                                   

                                                   <textarea  name="description" class="form-control"><?php echo $rowid['description']; ?></textarea>

                                                </div>

                                            </div>

                                            

                                             <div class="row form-group">

                                                <div class="col col-md-3">

                                                    <label for="file-input" class=" form-control-label">Image</label>

                                                </div>

                                                <div class="col-12 col-md-9">
<img src="attractions/<?php echo $rowid['img1']; ?>" style="width:100px;height:100px;object-fit:cover;float:left;">
                                                    <input type="file" id="file-input" name="img1" class="form-control-file">
                                                    <input type="hidden" id="file-input" name="img1_old" value="<?php echo $rowid['img1']; ?>" class="form-control-file">

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