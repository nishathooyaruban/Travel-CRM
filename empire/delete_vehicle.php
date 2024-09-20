<?php
include 'config/config.php';  

$loc_id=$_POST['att_id'];

mysqli_query($connect,"DELETE FROM vehicles WHERE id = '$loc_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "atttractions.php"
//-->
</script>';




?>