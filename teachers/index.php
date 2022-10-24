<?php

require_once '../lib/db.php';
require_once '../lib/auth.php';


if ($student_result = $db->query("SELECT Student_ID FROM Student_Accounts")); {

    $student_count = $student_result->num_rows;  // Counting how many entries are in the student table
}
    
if ($teacher_result = $db->query("SELECT Teacher_ID FROM Teacher_Accounts")); {

    $teacher_count = $teacher_result->num_rows; // Counting how many entries are in the teacher table
}

if ($class_result = $db->query("SELECT Class_ID FROM Classes")); {
    
    $class_count = $class_result->num_rows; // Counting how many classes are in the database.
}

if ($attendance_count = $db->query("SELECT total_attendance FROM students")); {
    
    $attendance_average = $attendance_count / $student_count * 100; // Calculating the average attendance gathered from all of the students in the database.
}

$db->close();

// Today's Date
$servertime = date('d/m/y');


    // Bootstrap
    require_once '../bootstrap/bootstrap.php';
    
    // Render the header.
    require_once '../html/partials/teacher-panel-header.html.php';
    
    // Render the homepage view.
    require_once '../html/session/teacher-homepage.html.php';
    
    // Render the footer.
    require_once '../html/partials/footer.html.php';
?>