<?php
  //Start Session
  session_start();
  //paths
  define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/msp/');
  //Include Configration
  require_once(BASE_URL.'config/config.php');
//echo BASE_URL;
  // Helper Function Files
  require_once(BASE_URL.'helpers/system_helper.php');
  require_once(BASE_URL.'helpers/format_helper.php');
  require_once(BASE_URL.'helpers/db_helper.php');



//echo BASE_URL;
  //Autoload Classes
 function __autoload($class_name){
    require_once(BASE_URL."libraries/". $class_name . '.php');
  }
?>
