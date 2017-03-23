<?php require ('../core/init.php');
require ('../libraries/Database.php');
require ('../libraries/User.php');
//  require_once(BASE_URL.'libraries/User.php');
//include (BASE_URL."libraries/class.Database.php");

 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">                       <!-- for internet ex -->
 	    <meta name="viewport" content="width=device-width, initial-scale=1">        <!-- for Mobile devices -->
 		<title>MSP Tech-Club</title>
 	    <link rel="stylesheet" href="../css/bootstrap.css">
 		<link rel="stylesheet" href="../css/font-awesome.min.css">
 		<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
 		<script src="../js/jquery-3.1.0.min.js"> </script>
 		<script src="../js/validator.js"></script>
 		<script src="../js/bootstrap.min.js"></script>
 		<script src="../js/plugins.js"></script>
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
                     </div>
                         </ul>
                     </div><!-- /.navbar-collapse -->
                 </div><!-- /.container-fluid -->
             </nav>
             <div class="lnk">
             <a class="underline" href="../index.php">
               Success, Click Here To Login
             </a>
           </div>
        </body>
</html>

     		<!--Navbar-->

<?php

  $data = array();
	if(isset($_POST['register'])){
		//Create Data Array
		$data['name'] = $_POST['name'];
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		//$data['password2'] = md5($_POST['password2']);
		//$data['organizing'] = $_POST['organizing'];
		//$data['media'] = $_POST['media'];
		//$data['house']
		$data['about'] = $_POST['about'];
  }

	$user = new User();
	return  $user->register($data);

	// Get Template Assign Vars
	//$template = new Template('./templates/register.php');

?>
