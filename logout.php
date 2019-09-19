<?php 

session_start();
session_destroy();
unset($_SESSION['RollNO']);
//$_SESSION['message']="You are not logged In";

session_unset(); 

// destroy the session 
session_destroy(); 

header("location: index.php");


?>