<?php
    
    $errName ='';
    $errEmail ='';
    $errMessage ='';
    $errHuman ='';
    $result ='';
    if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'MichaelHeple.com Contact Form'; 
		$to = 'info@michaelheple.com'; 
		$subject = 'Message from Contact Form ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
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
    
    <title>Michael Heple Web Design | Contact Me</title>
    
    <meta name="description" content="Contact Michael Heple Web Design about your website">
    
    <link rel="canonical" href="http://michaelheple.com/contact.php" >
    <link rel="author" href="http://michaelheple.com" >
    <link rel="icon" type="image/png" href="/images/favicon.png">
    
    <!-- Open Graph -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="company">
    <meta property="og:title" content="Michael Heple Web Design Services">
    <meta property="og:description" content="Sacramento based Web Design focused on the Artist and Small Business. I would love to talk to you about your home on the interent.">
    <meta property="og:url" content="http://michaelheple.com">
    <meta property="og:image" content="http://michaelheple.com/images/fbimage.jpg">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans&amp;subset=latin,latin" media="all">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/bs-main.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html" id="brand-container">
                  <span class="sr-only">Michael Heple Web Design</span>
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="http://michaelheple.com">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li class="active"><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right hidden-xs" id="socialtop">
                  <li><a href="http://www.facebook.com/michaelhepledesign" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" target="_blank"><span class="fa fa-github-square"></span></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section class="container">
        <div class="banner">
            <h1 class="sr-only">Michael Heple Web Design Services</h1>
        </div>
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
            <div class="page-section">
                <h2>Let's Connect</h2>
                <p>If you have questions about your website, or you just want some information on where to get started, shoot me a message using the form below. You can also send me an email at
                    <a class="contact-email" href="mailto:info@michaelheple.com">
                        info@michaelheple.com
                    </a>
                    or on these social medias:
                    <ul class="" id="contactsocial">
                        <li><a href="http://www.facebook.com/michaelhepledesign" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                        <li><a href="https://twitter.com/heple_m" target="_blank"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="https://github.com/michaelhweb" target="_blank"><span class="fa fa-github-square"></span></a></li>
                    </ul>
                </p>
            </div>
            <div class="page-section">
                <div class="row">
                    <div class="col-md-7 col-md-offset-2 contact-form">
                        <form class="form-horizontal" role="form" method="post" action="contact.php">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php if (isset($_POST["submit"])) {echo htmlspecialchars($_POST['name']); }?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if (isset($_POST["submit"])) {echo htmlspecialchars($_POST['email']); } ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php if (isset($_POST["submit"])) {echo htmlspecialchars($_POST['message']);}?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>	
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- End Page Content -->
    </section>
    <footer class="page-footer">
        <h3>Contact Me</h3>
        <p><a href="mailto:info@michaelheple.com">info@michaelheple.com</a></p>
        <ul class="" id="socialbottom">
                  <li><a href="http://www.facebook.com/michaelhepledesign" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                  <li><a href="https://twitter.com/heple_m" target="_blank"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="https://github.com/michaelhweb" target="_blank"><span class="fa fa-github-square"></span></a></li>
        </ul>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
