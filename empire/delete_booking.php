<?php
include 'config/config.php';  

$book_id=$_POST['book_id'];

mysqli_query($connect,"DELETE FROM bookings WHERE id = '$book_id'");
mysqli_query($connect,"DELETE FROM book_itinery WHERE book_id = '$book_id'");
mysqli_query($connect,"DELETE FROM itinery WHERE book_id = '$book_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "bookings.php"
//-->
</script>';




?>