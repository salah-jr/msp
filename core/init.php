<?php
  //Start Session
  session_start();
  //paths
  define('BASE_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/msp/');
  //Include Configration
  set_include_path('../');
  require_once('config/config.php');
//echo BASE_URL;
  // Helper Function Files
  require_once('helpers/system_helper.php');
  require_once('helpers/format_helper.php');
  require_once('helpers/db_helper.php');



//echo BASE_URL;
  //Autoload Classes
 function __autoload($class_name){
    require_once("libraries/". $class_name . '.php');
  }
?>
