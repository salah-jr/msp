<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">                       <!-- for internet ex -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">        <!-- for Mobile devices -->
		<title>MSP Tech-Club</title>
	    <link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
</head>

<body>

	<div class="container">
		<div class="admin">
			<form data-toggle="validator" role="form">
				<h1 class="text-center">Login</h1>
  				<div class="input-group">
    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    				<input id="email" type="text" class="form-control" name="email" placeholder="Email" required="">
  				</div>
  				<div class="input-group">
    				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    				<input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
  				</div>
  				<div class="input-group">
    				<a href="#" type="submit" class="btn btn-info btn-block">Sign in</a>
  				</div>
			</form>
	    </div>
	</div>


	<script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
</body>
</html>