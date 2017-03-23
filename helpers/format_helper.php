<?php

  function formatDate($date){
    $date =  date('F j, Y, g:i a',strtotime($date));
    return $date;
  }
  //URL format
  function urlFormat($str){
    //strip out all white spaces
    $str = preg_replace('/\s*/', '', $str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    //url encode
    $str = urlencode($str);
    return $str;
  }
?>
