<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/default.css">
<style>
.banner {
    height: 500px;
    color: white;
    background-attachment: fixed;
    background-image: url("uploads/homepage_banner.png");
  }
.secondary-banner {
    height: 300px;
    color: white;
    background-attachment: fixed;
    background-image: url("uploads/homepage_secondary_banner.png");
  }
</style>
<title>Web Attendance Tracking</title>
</head>
<body>
<!-- Homepage Banner -->

<div class="banner">
  <div class="container">
    <br><br>
    <div class="col-lg-8 col-md-8 col-sm-8">
        <header id="banner-text">
            <h1>Reliable, Measurable, Manageable</h1>
        </header>
    <br><br>
        <h4>
	    Tabletop Systems is a unique, fast, relaible tracking system that supports your every need in the school environment. We've made it easy for you to track, analyse and share data all in real time which gives you the freedom to make strategic decisions amongst your organisation. We're confident to say that our system is one of the most flexible web based tracking appliactions in the market today.
	    </h4>
	    </div>
	    
<!-- Quick Register -->
	<div class="container">
	    <div class="col-lg-4 col-md-4 col-sm-4">
	        <h3>Register Your School</h3>
	            <div class="panel-body">
	                <form method="post" action="register.php">
	                    <div class="form-group">
	                        <input class="form-control" name="email" required autofocus
	                        placeholder="Email Address *">
	                    </div>
	                    <div class="form-group">
	                        <input class="form-control" name="org" required
	                        placeholder="Organisation *">
	                    </div>
	                    <div class="form-group">
	                        <input class="form-control" name="contactno" required
	                        placeholder="Contact Number *">
	                    </div>
	                    <div class="form-group">
	                        <input class="form-control" name="password_1" required
	                        placeholder="Password *">
	                    </div>
	                    <div class="form-group">
	                        <input class="form-control" name="password_2" required
	                        placeholder="Confirm Password *">
	                    </div>
	                    <input type="submit" value="Register" class="btn btn-primary btn-block">
	                </form>
	            </div>
	        </div>
	    </div>
    </div>
</div>
<!-- Homepage banner end -->
<br><br>
<!-- Features -->
<div class="container">
<div class="col-lg-4 col-md-4 col-sm-4">
</br>
<center><img src="uploads/reliable.png" style="width: 100%; height: 150px; border-radius: 100px"></center>
<h3><b><center>Reliability</center></b></h3>

<?php
$satisfaction = "We can assure you that using our system to hold your students will reduce time consumption with our easy to use tools and features located around the web interface. It's both convenient for you whilst also giving you a sense of trust.";
    echo $satisfaction;
?>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<br>
<center><img src="uploads/time.png" style="width: 100%; height: 150px; border-radius: 100px"></center>
<h3><b><center>Time Efficient</center></b></h3>

<?php
$efficientcy = "We can assure you that using our system to hold your students will reduce time consumption with our easy to use tools and features located around the web interface. It's both convenient for you whilst also giving you a sense of trust.";
    echo $efficientcy;
?>

</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<br>
<center><img src="uploads/accurate.png" style="width: 100%; height: 150px; border-radius: 100px"></center>
<h3><b><center>Accurate</center></b></h3>

<?php	
	$accurate = "We can assure you that using our system to hold your students will reduce time consumption with our easy to use tools and features located around the web interface. It's both convenient for you whilst also giving you a sense of trust.";
	echo $accurate;
?>
</div>
</div>
<br><br><br></br>
<!-- Features end -->

<!-- About Us Banner -->

<div class="secondary-banner">
	<div class="container">
		<br><br>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<header id="header-secondary-text">
				<h1>About Us!</h1>
			</header>
		<h4>Founded on December 2017, Tabletop systems has developed an innoative solution to fit a broad spectrum of needs for all kinds of users. With our simple, easy to use system, you'll have no hassle with having difficulty on your way around.</h4>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<img src="uploads/about-us.png" style="width: 80%; height: 40%; border-radius: 150px;"></img>
		</div>
	</div>
</div>