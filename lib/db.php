<?php  
$host = 'localhost';
$dbuser = 'jgibbons';
$dbpass = '';
$dbname = 'Attendance_Tracker';

$db = mysqli_connect($host, $dbuser, $dbpass, $dbname); // intializing connection to the database

if($db == false){
	die("ERROR: Could not connect " . mysqli_connect_error());  // Display error message if failure on connection
}
?>
