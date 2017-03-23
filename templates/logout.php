<?php
require ('../core/init.php');
require ('../libraries/Database.php');
require ('../libraries/User.php');
require ('../helpers/system_helper.php');

  if(isset($_POST['do_logout'])){
    //Create User Object
    $user = new User();
    if($user->logout()){
      header("Location: ../index.php", true);
    }else {
      header("Location: ../index.php", true);
    }
  }
?>
