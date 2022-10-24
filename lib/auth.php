<?php

session_start();

    if(isset($_SESSION['student']) && $_SESSION['student']){
        // Render the homepage view.
        header("Location: ../index.php");
    }
    
    if(!isset($_SESSION['teacher'])){
	header("Location: ../index.php"); 
        
    }
	
?>