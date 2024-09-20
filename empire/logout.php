<?php

session_start();

if(empty($_SESSION['una'])) {

    header("location: index.php");

} ?>
<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!


// Finally, destroy the session.
unset($_SESSION["una"]);
header("location:index.php");
?>