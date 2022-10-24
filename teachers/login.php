<?php
require_once '../lib/db.php';
require_once '../bootstrap/bootstrap.php';

session_start();

// Check if there is a login request.
if(isset($_POST['email']) && isset($_POST['pass'])){
    // Collects information inputed into the login form boxes
    $email = $_POST['email'];
    $password = sha1($_POST['pass']);
    
    $query = "SELECT * FROM Teacher_Accounts WHERE Teacher_Email='$email' and Teacher_Password='$password'";
    
    $result = mysqli_query($db, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    
    if ($rows==1) {
    	echo ("Sucessfully logged in");
    
    	$_SESSION['user_email'] = $email;
    	$_SESSION['teacher'] = true;
    	echo $_SESSION['username'];
    	header("Location: ../session.php?username=".$email);
    }
    else
    {
    	echo ("ERROR: Username and password are incorrect");
    	header("Location: login.php");
    }
}
else{
    
    // Render the header view.
    include '../html/partials/header.html.php';
    
    // Render the account login view.
    include '../html/accounts/teacher-login.html.php';
    
    // Render the footer
    include '../html/partials/footer.html.php';
}


?>