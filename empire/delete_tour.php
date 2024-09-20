<?php
include 'config/config.php';  

$ref_num=$_POST['ref_num'];

mysqli_query($connect,"DELETE FROM book_itinery WHERE id = '$ref_num'");
mysqli_query($connect,"DELETE FROM itinery WHERE ref_num = '$ref_num'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "bookings.php"
//-->
</script>';




?>