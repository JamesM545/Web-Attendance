<?php

require_once 'bootstrap/bootstrap.php';

require_once 'html/partials/header.html.php';

require_once 'html/contact_us.html.php';

$mailbox="jamesmetcalfe545@gmail.com";
$name=$_POST['yname'];
$email=$_POST['email'];
$message=$_POST['message'];