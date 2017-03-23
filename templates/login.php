<?php
require ('../core/init.php');
require ('../libraries/Database.php');
require ('../libraries/User.php');
require ('../helpers/system_helper.php');


  if (isset($_POST['do_login'])) {
    //GET VARS
    $username = $_POST['username'];
    $password = md5($_POST['password']);
      $user = new User();
    if($user->login($username, $password)){
      header("Location: ../profile.php", true);
    }else {
      header("Location: ../index.php", true); 
    }
  }else {
    redirect('index.php');
  }
?>
