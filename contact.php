
<?php
/* Set e-mail recipient */
$myemail  = "mohamed.salah21500@gmail.com";

/* Check all form inputs using check_input function */
if (isset($_POST['contact-us'])) {
$email    = check_input($_POST['email']);
$cell    = check_input($_POST['cell']);
$comment    = check_input($_POST['message']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Hello! Your contact form has been Send ...";

/* Send the message using mail() function */
mail($myemail, $comment);

/* Redirect visitor to the thank you page */
header("Location: ../index.php", true);


/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">                       <!-- for internet ex -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">        <!-- for Mobile devices -->
		<title>MSP Tech-Club</title>
	    <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
        <div class="container">
    		<!--Navbar-->
    		<nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">MSP <span>Tech-Club</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="about.php">About</a></li>
                            <li><a href="mission.php">Mission</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
    		<!--Navbar-->

    		<!--contact-us-->
            <section class="contact-us text-center" id="contact">
                <div class="cont">
                    <div class="container">
                        <div class="row">
                            <h1>Tell Us What You Feel</h1>
                            <p class="lead">Feel Free To Contact Us Anytime</p>
                            <form role="form" method="post" action="contact.php">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control input-lg" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input name="cell" type="text" class="form-control input-lg" placeholder="Cell Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control input-lg" placeholder="Your Message"></textarea>
                                    </div>
                                    <input type="button" class="btn btn-info btn-block" name="contact-us" value="Contact US">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--contact-us-->


		<script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/validator.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
	</body>
</html>
