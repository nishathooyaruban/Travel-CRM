<?php



error_reporting(E_ALL);

error_reporting(-1);

ini_set('error_reporting', E_ALL);

 include 'config/config.php'; 



$book_id =$_POST['book_id'];

$nod =$_POST['nod'];

$created_by =$_POST['created_by'];

date_default_timezone_set('Asia/colombo');





 $cdate=date('Y-m-d h:i:s');



$insert_order = 'INSERT INTO book_itinery(book_id, created, nod, created_by)  
                     VALUES("'.$book_id.'", "'.$cdate.'","'.$nod.'","'.$created_by.'")'; 
					 if(mysqli_query($connect, $insert_order))  
                     {  
                          $ref_num = mysqli_insert_id($connect);  
                     }



	
?>
<form action="create_itinary_new.php" method="POST" id="all_details">

  <input type="hidden" name="ref_num" id="ref_num" value="<?php echo $ref_num; ?>" />			
  <input type="hidden" name="book_id" id="book_id" value="<?php echo $book_id; ?>" />			
  <input type="hidden" name="nod" id="nod" value="<?php echo $nod; ?>" />			
		
 	
						</form>
						
<script type="text/javascript">
   document.getElementById('all_details').submit(); // SUBMIT FORM
</script>