<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <title>Contact Us!</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Contact Us!</h3>
                </div>
                <div class="panel-body">
                    <p><center>Please state your queries with as much detail as possible.</center></p>
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="your_name"
                            placeholder="Your Name *" required autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email"
                            placeholder="Email Address *" required >
                        </div>
                        <div class="form-group">
                            <textarea rows="5" cols="97" name="message"></textarea>
                        </div>
                        <input type="Submit" value="Submit" class="btn btn-primary pull-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>