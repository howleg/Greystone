<?php
	
if (isset($_POST["submit"])) {
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['mobile'];
$name = $_POST['message'];

$from = 'GreyStone Contact Form';
$to = 'howlecomputing@gmail.com';
$subject = 'Message from Greystone website';

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if (!$_POST['name']) {
	$errName = 'Please enter your name';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Please enter a valid email address';
}


    
    // If there are no errors, send the email
if (!$errName && !$errEmail) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Greystone Estates</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      
</head>

  <body>
      
      <div class="container">
      <div class="header clearfix">
          
          
          
        <nav>
            <a href="index.html">
                <img src = "img/logo.png" href = "index.html">
            </a> 
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="photos.html">Photos</a></li>
            <li role="presentation"><a href="map.html">Map</a></li>
            <li role="presentation"><a href="directions.html">Directions</a></li>
            <li role="presentation"><a href="contact.html">Contact Us</a></li>
          </ul>
        </nav>
        <!--<h3 class="text-muted">Project name</h3> -->
      </div>

      <div class="col-md-2"></div>
          
    <div class="col-md-8">
        
    <div class="form-area">  
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            
            <form class="form-horizontal" role="form" method="post" action="contact.php">
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="First and last name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>";?>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                            
                    </div>
            
        <button type="button" id="submit" name="submit" value="Send" class="btn btn-primary pull-right" > Submit Form</button>
            
        </form>
    </div>
        
        <footer class="footer">
        <p>&copy; 2016 HowleComputing</p>
      </footer>
 
</div>
        <div class="col-md-2"></div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
  </body>
</html>
