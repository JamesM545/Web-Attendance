<html>
<head>
<title>Manage Classes</title>
</head>
<body>

<!-- Sidebar -->
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Tools</div>
            <div class="panel-body">
              <div class="sidebar">
                <div class='list-group'>
                  <a class='list-group-item'  href="index.php">Dashboard</a>
                  <a class='list-group-item active'  href="index.php">Classes</a>
                  <a class='list-group-item'  href="students.php">Student Accounts</a>
                  <a class='list-group-item'  href="teachers.php">Teacher Accounts</a>
                </div>
              </div>
            </div>
           </div>
        </div>
        
<!-- End sidebar -->

<!-- Display Students -->
<div class="col-lg-9 col-md-9 col-sm-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Current Classes</div>
            <div class="panel-body">
	            <table class="table table-bordered table-striped">
                <thead>
                 <tr>
                    <th width="1%"><center>Class ID</center></th>
                    <th width="6%"><center>Class Name</center></th>
                    <th width="8%"><center>Subject</center></th>
                    <th width="8%"><center>Year Group</center></th>
                  </tr>
                </thead>
              <tbody>
                
<!-- List of classes registered in database -->
            		<?php while($row = mysqli_fetch_array($result))
                        echo 
            			'<tr>
            				<td><center>'.$row['ID'].'</center></td>
            				<td><center>'.$row['class-name'].'</center></td>
            				<td><center>'.$row['subject'].'</center></td>
            				<td><center>'.$row['year-group'].'</center></td>
            			</tr>';
            		mysqli_close($db);
            		?>
              </tr>
            </tbody>
            
            <!-- Edit Student Popup -->
              <th>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#classedit">Edit Class</button>

              <!-- Modal -->
              <div id="classedit" class="modal fade" role="dialog">
                <div class="modal-dialog">

              <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"></button>
                      <h4 class="modal-title">Edit Student</h4>
                    </div>
                    <div class="modal-body">
                      
              <!-- Edit Class Info -->
                     <form method="post" action="classes.php">
                       <div class="form-group">
                         <label>Class ID:</label>
                         <input class="form-control" name="class-id">
                       </div>
                       <div class="form-group">
                         <label>Class Name:</label>
                         <input class="form-control" name="class-name">
                       </div>
                       <div class="form-group">
                         <label>Year Group:</label>
                         <input class="form-control" name="year-group">
                       </div>
              <!-- End Class Info -->
                    </div>
              <!-- End Modal Content -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Discard Changes</button>
                      <input type="submit" value="Save Changes" class="btn btn-success">
                     </form>
                    </div>
                  </div>
                </div>
            </div>
          </th>

<!-- Delete Student Popup -->
              <th>INSERT DELETE CLASS MODAL HERE</th>
              
<!-- End Display Students -->
</body>
</html>