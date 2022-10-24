<?php
require_once 'lib/db.php';
require_once 'bootstrap/bootstrap.php';
require_once 'html/accounts/register.html.php';
require_once 'html/partials/header.html.php';

 $error = array();
// variables from register form
	$semail = $_POST['email'];
	$sname = $_POST['org'];
	$contactno = $_POST['contactno'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

// handles register form and data being send to database
if ((isset($_REQUEST['submit']))) // checks if submit is clicked
{

// checks if passwords are the same
if($password_1 == $password_2) { 
$pwd_check = true;
$spassword = $password_1; 

if (count($error) == 0) { // if no errors have occured, continue

 $spassword = sha1($spassword);  // Encrpyt the password before sending to database
 
 
	$sql = "INSERT INTO Schools (`School_Name`,`School_Email`,`School_Password`,`School_Contact`)
				VALUES ('$sname','$semail','$spassword','$scontact')";// sql query to add variables to db
				
	mysqli_query($db, $sql); // insert data ( run sql query on database)
		}
	}
}
else {
	array_push($error, "Passwords do not match");  // Validation for the password fields
}
?>