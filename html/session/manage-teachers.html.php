<html>
<head>
<title>Manage Teachers</title>
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
                  <a class='list-group-item'  href="classes.php">Classes</a>
                  <a class='list-group-item'  href="students.php">Student Accounts</a>
                  <a class='list-group-item active'  href="teachers.php">Teacher Accounts</a>
                </div>
              </div>
            </div>
           </div>
        </div>
        
<!-- End sidebar -->

<!-- Display Students -->
<div class="col-lg-9 col-md-9 col-sm-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Current Teachers</div>
            <div class="panel-body">
	            <table class="table table-bordered table-striped">
                <thead>
                 <tr>
                    <th width="1%"><center>ID</center></th>
                    <th width="8%"><center>Firstname</center></th>
                    <th width="8%"><center>Lastname</center></th>
                    <th width="8%"><center>Contact Number</center></th>
                  </tr>
                </thead>
              <tbody>
                
<!-- List of students registered in database -->
            		<?php while($row = mysqli_fetch_array($result))
                        echo 
            			'<tr>
            				<td><center>'.$row['ID'].'</center></td>
            				<td><center>'.$row['First_Name'].'</center></td>
                    <td><center>'.$row['Last_Name'].'</center></td>
                    <td><center>'.$row['Contact_Number'].'</center></td>
            			</tr>';
            		mysqli_close($db);
            		?>
              </tr>
            </tbody>
            
            <!-- Edit Student Popup -->
              <th>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentedit">Edit Student</button>

              <!-- Modal -->
              <div id="studentedit" class="modal fade" role="dialog">
                <div class="modal-dialog">

              <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"></button>
                      <h4 class="modal-title">Edit Teacher</h4>
                    </div>
                    <div class="modal-body">
                      
              <!-- Edit Student Form -->
                     <form method="post" action="students.php">
                       <div class="form-group">
                         <label>Student ID</label>
                         <input class="form-control" name="student_id">
                       </div>
                       <div class="form-group">
                         <label>Email Address:</label>
                         <input class="form-control" name="email">
                       </div>
                       <div class="form-group">
                         <label>New Password:</label>
                         <input class="form-control" name="password">
                       </div>
                        <div class="form-group">
                          <laebl>Current Grade</laebl>
                         <select class="form-control">
                           
              <!-- Primary school Gradings -->
                          <option value="1c*">1c</option>
                          <option value="1b">1b</option>
                          <option value="1a">1a</option>
                          
                          <option value="2c">2c</option>
                          <option value="2b*">2b</option>
                          <option value="2a">2a</option>
                          
                          <option value="3c">3c</option>
                          <option value="3b">3b</option>
                          <option value="3a*">3a</option>
                          
                          <option value="4c">4c</option>
                          <option value="4b">4b</option>
                          <option value="4a">4a</option>
                          
                          <option value="5c">5c</option>
                          <option value="5b">5b</option>
                          <option value="5a">5a</option>
                          
                          <option value="6c">6c</option>
                          <option value="6b">6b</option>
                          <option value="6a">6a</option>
                          
                          <option value="7c">7c</option>
                          <option value="7b">7b</option>
                          <option value="7a">7a</option>
                        </select>
                       </div>
                          <div class="form-group">
                          <laebl>Aspirational Grade</laebl>
                         <select class="form-control">
                           
              <!-- Primary school Gradings -->
                          <option value="1c*">1c</option>
                          <option value="1b">1b</option>
                          <option value="1a">1a</option>
                          
                          <option value="2c">2c</option>
                          <option value="2b*">2b</option>
                          <option value="2a">2a</option>
                          
                          <option value="3c">3c</option>
                          <option value="3b">3b</option>
                          <option value="3a*">3a</option>
                          
                          <option value="4c">4c</option>
                          <option value="4b">4b</option>
                          <option value="4a">4a</option>
                          
                          <option value="5c">5c</option>
                          <option value="5b">5b</option>
                          <option value="5a">5a</option>
                          
                          <option value="6c">6c</option>
                          <option value="6b">6b</option>
                          <option value="6a">6a</option>
                          
                          <option value="7c">7c</option>
                          <option value="7b">7b</option>
                          <option value="7a">7a</option>
                        </select>
                      </div>
                          <div class="form-group">
                          <laebl>Predicted Grade</laebl>
                         <select class="form-control">
                           
              <!-- Primary school Gradings -->
                          <option value="1c*">1c</option>
                          <option value="1b">1b</option>
                          <option value="1a">1a</option>
                          
                          <option value="2c">2c</option>
                          <option value="2b*">2b</option>
                          <option value="2a">2a</option>
                          
                          <option value="3c">3c</option>
                          <option value="3b">3b</option>
                          <option value="3a*">3a</option>
                          
                          <option value="4c">4c</option>
                          <option value="4b">4b</option>
                          <option value="4a">4a</option>
                          
                          <option value="5c">5c</option>
                          <option value="5b">5b</option>
                          <option value="5a">5a</option>
                          
                          <option value="6c">6c</option>
                          <option value="6b">6b</option>
                          <option value="6a">6a</option>
                          
                          <option value="7c">7c</option>
                          <option value="7b">7b</option>
                          <option value="7a">7a</option>
                        </select>
                      </div>
              <!-- End Edit Student Form -->
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
              <th>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#studentdelete">Delete Student</button>

              <!-- Modal -->
              <div id="studentdelete" class="modal fade" role="dialog">
                <div class="modal-dialog">

              <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"></button>
                      <h4 class="modal-title">Delete Student</h4>
                    </div>
                    <div class="modal-body">
                      
              <!-- Edit Student Form -->
                     <form method="post" action="../../teachers/students.php">
                       <div class="form-group">
                         <label>Student ID:</label>
                         <input class="form-control" name="student-id" required>
                       </div>
                       <h4>Are you sure you want to perform this action?</h4>
              <!-- End Edit Student Form -->
                    </div>
              <!-- End Modal Content -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
                      <button type="submit" class="btn btn-success">Proceed</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </th>
              
<!-- End Display Students -->
</body>
</html>