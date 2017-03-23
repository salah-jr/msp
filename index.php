<?php  require('core/init.php'); ?>
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
			<link rel="stylesheet" href="css/style1.css">
			<script src="js/jquery-3.1.0.min.js"> </script>
			<script src="js/validator.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/plugins.js"></script>
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

    		<!--Content-->
    		<section class="content text-center" id="content">
                <div class="container">
                    <p class="lead">
                        Welcome, Microsoft Student Tech Club at Assiut university is a student community program that promotes advanced technology through education, practice, and innovation. It also provides students with both technical and non-technical sessions needed which is packing their lives with high level of skills and supporting their careers with opportunities.
                    </p>
                </div>
                  	<button class="btn btn-info" id="signInBtn">Sign in</button>
      				<button class="btn btn-info" id="signUpBtn">Sign up</button>
            </section>
    		<!--Content-->

            <!--Sign_in-->
            <div class="modal fade" id="signInModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="text-center"><span class="glyphicon glyphicon-lock"></span> Sign in to your Account</h4>
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" role="form" method="post" action="templates/login.php">
                                <div class="form-group">
                                    <label for="username"><span class="glyphicon glyphicon-user"></span> Username :</label>
                                    <input name="username" type="text" class="form-control" placeholder="Enter Username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Enter password" required="">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" checked> Remember me</label>
                                </div>
                                <button name="do_login" type="submit" class="btn btn-info btn-block">Sign in</button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            <!--Sign_in-->

            <!--Sign_up-->
            <div class="modal fade" id="signUpModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="text-center"><span class="glyphicon glyphicon-lock"></span> Sign up</h4>
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" role="form" method="post" action="templates/register.php">
															<div class="form-group">
																	<label for="username"><span class="glyphicon glyphicon-user"></span> Name :</label>
																	<input name="name" type="text" class="form-control" id="Fname" placeholder="Name" required="">
															</div>
                                <div class="form-group">
                                    <label for="username"><span class="glyphicon glyphicon-user"></span> Username :</label>
                                    <input name="username" type="text" class="form-control" id="Fname" placeholder="username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email :</label>
                                    <input name="email" type="email" class="form-control" id="usrname" placeholder="Enter email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password :</label>
                                    <input name="password" type="password" class="form-control" id="psw" placeholder="Enter password" required="">
                                </div>
																<!--<div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password :</label>
                                    <input name="password2" type="password" class="form-control" id="psw" placeholder="Enter password" required="">
                                </div>-->
                                <div class="form-group">
																	<label for="house"><span class="glyphicon glyphicon-home"></span> House :</label>
																	<input name="house" type="text" class="form-control" placeholder="media or organizing" required="">
                                </div>
                                <div class="form-group">
                                    <label for="about"><span class="glyphicon glyphicon-pushpin"></span> about me :</label>
                                    <textarea name="about" class="form-control" required=""></textarea>
                                </div>
                                <button name="register" type="submit" class="btn btn-info btn-block">Sign up</button>
                                <!---<a href="" class="btn btn-primary btn-block">Sign up with Facebook</a>-->
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!--Sign_up-->
        </div>
	</body>
</html>
