<?php

session_start(); // Start or resume the session
// Clear all session variables
$_SESSION = array();
// Destroy the session
session_destroy();


// Redirect to another page or perform other actions
echo '--redirect--https://dfytax.com';
exit;
?>

