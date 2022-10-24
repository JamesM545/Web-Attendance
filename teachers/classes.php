<?php
require_once '../lib/db.php';
require_once '../bootstrap/bootstrap.php';
require_once '../lib/auth.php';

$query = ("SELECT `ID`, `class-name` ,`subject` , `year-group` FROM classes");
$result = mysqli_query($db, $query);

    // Render the header.
    require_once '../html/partials/teacher-panel-header.html.php';

    // Render the student manager.
    require_once '../html/session/manage-classes.html.php';
    
    // Render the footer.
    require_once '../html/partials/footer.html.php';

?>