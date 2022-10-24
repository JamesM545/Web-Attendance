<?php
session_start();

require_once 'bootstrap/bootstrap.php';
    
    if(isset($_SESSION['student']) && $_SESSION['student']){
        // Render the homepage view.
        header("Location: welcome.php");    
    }
    
    elseif (isset($_SESSION['teacher']) && $_SESSION['teacher']){
        // Render the teacher panel.
        header("Location: teachers/index.php");
    }
    else {
    
    // Render the header.
    require_once 'html/partials/header.html.php';
    
    // Render the homepage view.
    require_once 'html/homepage-new.html.php';

    // Render the footer.
    require_once 'html/partials/footer.html.php'; 
        
}
?>