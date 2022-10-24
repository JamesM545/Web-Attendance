<html lang="en">
<link rel="stylesheet" type="text/css" href="../../css/default.css">
<body>
    <br><br><br><br><br><br>
<div class="col-md-2">
    <div class="container-fluid">
    <div class="row">
    <div class="thumbnail">
    <center>
        </br>
            <br>
            <?php get_avatar($db);?>
            <br>
            <form action="lib/upload.php" method='post' enctype='multipart/form-data'>
                <input type='hidden' name='upload_type' value='avatar'>
                <div class='input-group'>
                    <span class='input-group-addon'>
                        <i class='glyphicon glyphicon-open-file'></i>
                    </span>
                    <input class="form-control" type="file" name="file">
                </div>
                <br><br>
                    <input type="submit" class="btn btn-primary">
            </form>
            <p><strong>Warning:</strong> As a security measure, only png or jpg file formats will be allowed. Others are prohibited.</p>

</center>
</div>
</div>
</div>
<!-- Column Div -->
</div>
<div class="col-md-8">
<center><img src="uploads/graph.png" style="width:40px;height:40px;"></center>
   <h4><b><center>Your Progress</center></b></h4>
   <br>
<?php
	$overview = "<b><center>Want to see how you're performing? Down below will show you a breif overview of your punctuality so you can find the highlight of what you need to improve upon.</center></b>";
	echo $overview;
?>
   	<table class="table table-bordered table-inverse">
<thead>
 <tr>
<th width="6%"><center>Attendance</center></th>
<th width="8%"><center>Firstname</center></th>
<th width="8%"><center>Lastname</center></th>
</tr>
</thead>
<tbody>
</br>
        <?php
        session_start();
        $email = $_SESSION['student'];
        $displayprogress = ("SELECT Current, Aspirational, Predicted FROM Student_Grades WHERE Student_Email='$email'");
        $progresult = mysqli_query($db, $displayprogress);
        ?>
		<?php while($progress = mysqli_fetch_array($progresult));
            echo 
			'<tr>
                <td><center>'.$progress['Current'].'</center></td>
				<td><center>'.$progress['Aspirational'].'</center></td>
                <td><center>'.$progress['Predicted'].'</center></td>
			</tr>';
		?>
</tbody>
</table>
<br>
<br>
</br>
<center><img src="images/loggedin/grades.png" style="width:40px;height:40px;"></center>
<h4><b><center>Grades</center></b></h4>
<br>
<?php
    $grades = "<b><center>Forgot your target grades? No problem, we have you covered. With our simple to use tools, you can check back on your aspirational grades and current grades at any time so you won't miss anything.</center></b>";
        echo $grades;
?>
   	<table class="table table-bordered table-inverse">
<thead>
 <tr>
<th width="6%"><center>Subject</center></th>
<th width="6%"><center>Current Grade</center></th>
<th width="8%"><center>Predicted Grade</center></th>
<th width="8%"><center>Aspirational Grade</center></th>
</tr>
</thead>
<tbody>
</br>
<?php
    $displaygrades = ("SELECT Current_Grade, Aspirational_Grade, Predicted_Grade FROM students");
    $graderesult = mysqli_query($db, $displaygrades)
    ?>
<?php 
    while($grades = mysqli_fetch_array($graderesult))
        echo 
		    '<tr>
                <td><center></center></td>
				<td><center>'.$grades['Current_Grade'].'</center></td>
                <td><center>'.$grades['Predicted_Grade'].'</center></td>
                <td><center>'.$grades['Aspirational_Grade'].'</center></td>
			</tr>';
		?>
</tbody>
</table>
<br>
<br>
</br>
<center><img src="images/loggedin/attendance.png" style="width:40px;height:40px;"></center>
<h4><b><center>Attendance Record</center></b></h4>
</br>
<?php
$atttrack = "<b><center>Late to a lesson? Find out here when that was and how you can improve on it next time to ensure that the issue does not occur again.</center></b>";
    echo $atttrack;
?>
   	<table class="table table-bordered table-inverse">
<thead>
 <tr>
<th width="6%"><center>Total Unauthorised Absences</center></th>
<th width="8%"><center>Total Authorised Absences</center></th>
<th width="8%"><center>Total Sesisons</center></th>
<th width="8%"><center>Attendance</center></th>
</tr>
</thead>
<tbody>
</br>
        <?php
        $totalsessions = $unauthabsences + $authabsences;
        $displayattendance = (
            '<tr>
                <td><center>'.$unauthabsences = 4 .'</center></td>
                <td><center>'.$authabsences = 8 .'</center></td>
                <td><center>'.$totalsessions = $unauthabsences + $authabsences .'</center></td>
                <td><center>'.$student_attendance = $totalsessions / 100 .'</center></td>
			</tr>');
            echo $displayattendance;
            mysqli_close($db);
		?>
</tbody>
</table>
</body>
</html>

