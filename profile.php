<?php
	require('core/init.php');
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
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/circle-progress.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
	</head>
	<body>
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-inverse navbar-relative-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">MSP <span>Tech-Club</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/user.png"> <span class="caret"></span></a>
                                <form class="dropdown-menu" method="post" action="templates/logout.php">
                                    <button name="do_logout" type="submit" class="btn btn-info btn-block">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- Navbar -->

    		<!--pf_Content-->
    		<section class="profile" id="profile">
                <div class="container">
                    <div class="col-lg-3">
                        <div class="pr_img">
                            <img class="img-responsive img-circle" src="images/user.png">
                        </div>
												<?php if(isLoggedIn()) :?>
														<h4>Hello,<?php echo getUser() ['name']; ?></h4>
													<?php endif; ?>
                        <div class="list">
                            <ul>
                                <a href"#"><li>About Me</li></a>
                                <a href"#"><li>Badges</li></a>
                                <a href"#"><li>Progress</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="pf_content col-lg-9 text-center">

                        <div class="badges">

                        </div>
                        <div class="progress">
                            <div class="attendance col-lg-3" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-target="#contents">
                                <span>Attendance</span>
                            </div>
                            <div class="interaction col-lg-3" data-toggle="popover" data-trigger="hover" data-placement="bottom">
                                <span>Interaction</span>

                            </div>
                            <div class="task col-lg-3" data-toggle="popover" data-trigger="hover" data-placement="bottom">
                                <span>Task</span>

                            </div>
                            <div class="risk col-lg-3" data-toggle="popover" data-trigger="hover" data-placement="bottom">
                                <img src="images/Andl.png">
                                <span>Risk</span>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
    		<!--pf_Content-->

	</body>
</html>
