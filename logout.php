<?php
require_once 'bootstrap/bootstrap.php';
require_once "html/partials/header.html.php";

session_start();

session_destroy();

$logoutmessage = ("<center><br><br><br><strong>You have successfully been logged out and will be redirected in the next 5 seconds.</strong></br></center>");
	echo $logoutmessage;
header( "refresh:5; index.php" ); 
?>