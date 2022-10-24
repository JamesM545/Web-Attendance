<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../css/panel.css">
  <title>Teacher Dashboard - Online Tracking Application</title>
</head>
<body>
  
<!-- Sidebar -->
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="panel panel-primary">
          <div class="panel-heading">Tools</div>
            <div class="panel-body">
              <div class="sidebar">
                <div class="list-group">
                  <a class="list-group-item active"  href="index.php">Dashboard</a>
                  <a class="list-group-item"  href="classes.php">Classes</a>
                  <a class="list-group-item"  href="students.php">Student Accounts</a>
                  <a class="list-group-item"  href="teachers.php">Teacher Accounts</a>
                </div>
              </div>
            </div>
           </div>
           <!-- Profile -->
           
          <div class="panel panel-primary">
            <div class="panel-heading">Profile</div>
              <div class="panel-body">
                <h5><center><strong><?php
                                if(isset($_SESSION['teachlogin'])){
                                    echo "Welcome", $_SESSION['teachlogin'];}?></center></strong></h5>
              </div>
          </div>
<!-- End sidebar -->
        </div>
<!-- End Profile -->

<!-- Database Counters -->

<div class="col-lg-9 col-md-9 col-sm-9">
    <div class="panel panel-primary">
      <div class="panel-heading">Overview</div>
        <div class="panel-body">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="well well-student-counter">
              <h2><span class="glyphicon glyphicon-user"></span><center><b><?php echo ($student_count); ?></b></center></h2>
              <h4><center><b>Total Students Registered</b></center></h4>
          </div>
        </div>
      
      <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="well well-teacher-counter">
          <h2><span class="glyphicon glyphicon-plus-sign"></span><center><b><?php echo ($teacher_count); ?></b></center></h2>
          <h4><center><b>Total Teachers Registered</b></center></h4> 
          </div>
        </div>
      
      <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="well well-class-counter">
          <h2><span class="glyphicon glyphicon-book"></span><center><b><?php echo ($class_count); ?></b></center></h2>
          <h4><center><b>Total Classes Created</b></center></h4> 
          </div>
        </div>
      
      <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="well well-attendance-counter">
          <h2><span class="glyphicon glyphicon-signal"></span><center><b><?php echo ($attendance_average); ?>%</b></center></h2>
          <h4><center><b>Average Student Attendance</b></center></h4> 
          </div>
        </div>
      </div>
  </div>
</div>
<!-- End Database Counters -->

<!-- Attendance Chart  -->
<div class="col-lg-5 col-md-5 col-sm-5">
  <div class="panel panel-primary">
    <div class="panel-heading">Average Student Attendance</div>
      <div class="panel-body">
        <center>Chart goes here!</center>
      </div>
    </div>
  </div>
<!-- End Attendance Chart -->

<!-- Stats -->
<div class="col-lg-4 col-md-4 col-sm-4">
  <div class="panel panel-primary">
    <div class="panel-heading">Stats</div>
      <div class="panel-body">
        <center>SOME GOOD STUFF GOES HERE</center>
    </div>
  </div>
</div>
<!-- End Stats -->

<div class="col-lg-9 col-md-9 col-sm-9 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
  <div class="panel panel-primary">
    <div class="panel-heading">More stuff</div>
      <div class="panel-body">
        <center>More good stuff here</center>
    </div>
  </div>
</div>


</body>
</html>