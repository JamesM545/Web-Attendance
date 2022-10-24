<?php
    require_once '../lib/db.php';
    require_once '../bootstrap/bootstrap.php';
    require_once '../lib/auth.php';


    // Display Students Data
    $query = ("SELECT ID, First_Name, Last_Name, Contact_Number, Current_Grade, Aspirational_Grade, Predicted_Grade FROM students");
    $result = mysqli_query($db, $query);

    // Render the header.
    require_once '../html/partials/teacher-panel-header.html.php';

    // Render the student manager.
    require_once '../html/session/manage-students.html.php';
    
    // Render the footer.
    require_once '../html/partials/footer.html.php';
    
    
    // Edit Student Query

	$student_id = $_POST['student_id']; // Collects information inputed from the admintool student creation page
    $student_first_name = $_POST['student-first-name'];
    $student_last_name = $_POST['student-last-name'];
    $new_student_password = sha1($new_student_pass); // Encrypt the new password if given before sending to database
    $new_parent_email = $_POST['new-parent-email'];
    $new_contact_number = $_POST['new_contact_number'];
    $new_current_grade = $_POST['new_current_grade'];
    $new_aspirational_grade = $_POST['new_aspirational_grade'];
    $new_predicted = $_POST['new_predicted'];
	
	if ((isset($_REQUEST['submit']))) // checks if submit is clicked
{
    $editstudent = ("UPDATE `students` SET `Password` = '$new_student_password', `Parent_Email` = '$new_parent_email', `Contact_Number` = '$new_contact_number', `Current_Grade` = '$newcurrentgrade', `Aspirational_Grade` = '$newaspirgrade', `Predicted_Grade` = '$newpredicted' WHERE `students`.`ID` = '$student_id';");

	mysqli_query($db, $editstudent); // modify the data (run the query and update data in database)
}
exit(); // Stops the file from proceeding with further code which isn't involved in the request.


// Delete Student Query

	$studentid = $_POST['student-id']; // Collects information inputed from the admintool student creation page
	
	if ((isset($_REQUEST['submit']))) // checks if submit is clicked
{

$deletestudent = ("DELETE FROM students WHERE ID=$studentid");

	mysqli_query($db, $deletestudent); // delete data ( run sql query on database)
}
exit();
?>