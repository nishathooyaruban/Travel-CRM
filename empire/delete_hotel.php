<?php
include 'config/config.php';  

$hot_id=$_POST['hot_id'];

mysqli_query($connect,"DELETE FROM hotels WHERE id = '$hot_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "hotels.php"
//-->
</script>';




?>