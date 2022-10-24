<?php
    require_once '../lib/db.php';
    require_once '../bootstrap/bootstrap.php';
    require_once '../lib/auth.php';


    // Display Students Data
    $query = ("SELECT ID, First_Name, Last_Name FROM teachers");
    $result = mysqli_query($db, $query);

    // Render the header.
    require_once '../html/partials/teacher-panel-header.html.php';

    // Render the student manager.
    require_once '../html/session/manage-teachers.html.php';
    
    // Render the footer.
    require_once '../html/partials/footer.html.php';
    
    
    // Edit Teacher Query


	
	if ((isset($_REQUEST['submit']))) // checks if submit is clicked
{
    $editstudent = ("UPDATE `teachers` SET `Password` = '$new_teacher_password', `Parent_Email` = '$new_parent_email', `Contact_Number` = '$new_contact_number', `Current_Grade` = '$newcurrentgrade', `Aspirational_Grade` = '$newaspirgrade', `Predicted_Grade` = '$newpredicted' WHERE `students`.`ID` = '$student_id';");

	mysqli_query($db, $editstudent); // modify the data (run the query and update data in database)
}
exit(); // Stops the file from proceeding with further code which isn't involved in the request.


// Delete Teacher Query

	$teacherid = $_POST['teacher-id']; // Collects information inputed from the admintool teacher creation page
	
	if ((isset($_REQUEST['submit']))) // checks if submit is clicked
{

$deletestudent = ("DELETE FROM teachers WHERE ID=$teacherid");

	mysqli_query($db, $deleteteacher); // delete data ( run sql query on database)
}
exit();
?>