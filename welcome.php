<?php
session_start();

require_once 'lib/db.php';
require_once 'bootstrap/bootstrap.php';

/**
 *Gets the users avatar and displays it.
*/
function get_avatar($sql){
    
    $email = $_SESSION['email'];

        
    // Check if the user has an avatar.
    if(count($result) == 1){
        $avatar_url = $result[0]['Avatar_URI'];
    }
    else{
        // No avatar. Render the default.
        $avatar_url = 'https://cdn0.iconfinder.com/data/icons/PRACTIKA/256/user.png';
    }
    
    // Render the image.
    print("<img src='$avatar_url' width='90%' class='center-block'");
}

require_once 'html/session/student-homepage-welcome.html.php';
require_once 'html/partials/student-header.html.php';
?>