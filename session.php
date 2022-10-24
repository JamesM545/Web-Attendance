<html>
<head>
    
<?php
require_once 'html/partials/header.html.php';
require_once 'bootstrap/bootstrap.php';
$loginmessage = ("<center><br><br><br><strong>You have successfully logged in and will be redirected in the next <span id='refresh-timer'></span> seconds.</strong></br></center>");
	echo $loginmessage;
?>

<script>
    var current_timer_val = 3;  // Max Seconds
    
    var refresh_timer = document.getElementById('refresh-timer');
    refresh_timer.innerHTML = 3;
    
    window.setInterval(function(){
        if(current_timer_val == 1){
            window.location.assign('index.php');  // When timer hits 1, redirect to index.php
        }
        else {
            current_timer_val--;
            refresh_timer.innerHTML = current_timer_val;
        }
    }, 1*1000);
</script>

</head>
</html>