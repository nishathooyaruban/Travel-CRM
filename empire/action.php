<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include 'config/config.php';
 if(isset($_POST["location_id"]))  
 {  
      $order_table = '';  
      $message = '';  
      $location_id = $_POST["location_id"];  
      $num_padded = $_POST["num_padded"];  
     $sqlid= "SELECT * FROM locations WHERE id='$location_id'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
$location=$rowid['name'];
	}
	  date_default_timezone_set('Asia/Colombo');
	  $creation_date= date('Y-m-d h:i:s');
	  $indate= date('Y-m-d');
 $order_table .= '<div id="shared-lists" class="row">';
   
          $order_table .= '<div id="example2-left'.$num_padded.'" class="list-group col left_list">';
		   $order_table .= '<h6><b>All Attractions</b></h6>';
               $sqlia= "SELECT * FROM attractions WHERE location='$location' ORDER BY location";
	$runia=mysqli_query($con,$sqlia) or die("SQL error");
	$noria=mysqli_num_rows($runia);

	while($rowia=mysqli_fetch_array($runia))
	{
 $order_table .='<div class="list-group-item"><label><input type="checkbox" name="attraction'.$num_padded.'[]" id="att'.$rowia['id'].'" value="'.$rowia['id'].'" style="float: left; width: auto;  margin-top: 6px; margin-right: 10px;"> <span style="float:left">'. $rowia['location'].'-'. $rowia['name'].'</span></label></div>';
	}
	 $order_table .= '</div>';
	
               
						
					
		$order_table .='<script>
$(document).ready(function(){
  $("#myInput'.$num_padded.'").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable'.$num_padded.' .left_list .list-group-item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>';
	
	
	 $order_table .= '<br><div class="col-md-12">'; 
	 $order_table .= '<h4>Accomadation</h4>'; 
	 $order_table .= '<table class="table">'; 
     $order_table .= '<tr><th >Hotel</th></tr>'; 
	 $order_table .= '<tr>'; 
	 $order_table .= '<td>';  
	 $order_table .= '<select name="hotel01'.$num_padded.'"class="form-control">'; 
	    $order_table .='<option  value="">Select Hotel</option>';
  
		$sqlid= "SELECT * FROM hotels  WHERE location='$location'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
			  $order_table .='<option  value="'.$rowid['id'].'">'.$rowid['name'].' '.$rowid['star'].' Star</option>';
	}
        $order_table .= '</select>'; 
        $order_table .= '</td>'; 
		
        
        $order_table .= '</tr>'; 
		
        $order_table .= '</table>'; 
        $order_table .= '</div>'; 
 
      $output = array(  
           'order_table'     =>     $order_table,  
           
      );  
      echo json_encode($output);  
 }
 ?>