<?php
  // redirect to page
 function redirect($page = FALSE, $message = NULL, $message_type = NULL){
    if(is_string($page)){
      $location = $page;
    } else {
      $location = $_SERVER ['SCRIPT_NAME'];
    }
    //Check for message
    if($message != NULL){
      //Set message
      $_SESSION['message'] = $message;
    }
    if($message_type != NULL){
      //Set message type
      $_SESSION['message_type'] = $message_type;
    }
    //Redirect
    header('location : '.$location);
    exit;
  }
   function displayMessage(){
    if(!empty($_SESSION['message'])){
      //assign message bar
      $message = $_SESSION['message'];

      if(!empty($_SESSION['message_type'])){
        //assign type Var
        $message_type = $_SESSION['message_type'];
        //create output
        if($message_type == 'error'){
          echo '<div class = "alert alert-danger">' . $message . '</div>';
        } else {
          echo '<div class = "alert alert-success">' . $message . '</div>';
        }
      }
      //Unset message
      unset($_SESSION['message']);
      unset($_SESSION['message_type']);
    } else {
      echo '';
    }
  }
   function isLoggedIn(){
    if(isset($_SESSION['is_logged_in'])){
      return true;
    }
    else {
      return false;
    }
  }
  function getUser(){
    $userArray = array();
    $userArray['user_id'] = $_SESSION['user_id'];
    $userArray['username'] = $_SESSION['username'];
    $userArray['name'] = $_SESSION['name'];
    return $userArray;

  }

?>
