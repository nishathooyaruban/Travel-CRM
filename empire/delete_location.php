<?php
include 'config/config.php';  

$loc_id=$_POST['loc_id'];

mysqli_query($connect,"DELETE FROM locations WHERE id = '$loc_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "locations.php"
//-->
</script>';




?>