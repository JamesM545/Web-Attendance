<?php
    session_start();
    require_once '../lib/db.php';
    
    if(isset($_FILES['file']) && isset($_POST['upload_type'])){
        
        switch($_POST['upload_type']){
            case('avatar'):
                // Get the file from the posted data.
                $file = $_FILES['file'];
                
                // Check the file type.
                $file_type = explode('.', $file['name'])[1];
                if($file_type !== 'png' && $file_type !== 'jpg' && $file_type !== 'jpeg'){
                    // Invalid file type.
                    header('Location: index.php?invalid_avatar_upload_type');
                }
                else{
                    // File type OK. Generate a new name for the file.
                    $new_file_name = uniqid() . '.' . $file_type;
                    
                    // Move the file to the uploads folder.
                    move_uploaded_file($file['tmp_name'], '../uploads/avatars/' . $new_file_name);
                
                    // Change the users avatar in the database.
                    // check if it already exists.
                    $email = $_SESSION['user_email'];
                    $uri = "/uplaods/avatars/" . $new_file_name;
                    
                    $query = mysqli_query($db, "SELECT * FROM User_Avatars WHERE User_Email = '$email'");
                    $results = mysqli_fetch_array($query);
                    
                    if(count($results) > 0){
                        // Update it.
                    }
                    else{
                        // Create it.
                        mysqli_query($db, "INSERT INTO User_Avatars (`User_Email`, `Avatar_URI`) VALUES ('$email', '$uri')");
                    }
                    
                }
                
                header("Location: ../welcome.php");
                
                // Redirect the user back to the homepage.
            break;
            
            default:
                die('Invalid upload type ' . $_POST['upload_type']);
        }
        
    }
    else{
        die('Invalid request.');
    }