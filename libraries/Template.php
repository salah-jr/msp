<?php
/*
 * template class
 * creates template/view object
 */
  class Template{
    //path to template
    protected $template;
    //variables passed in
    protected $vars = array();

      //Class Constructor
      public function __construct($template){
        $this->template = $template;
     }

     // Get Template variables
     public function __get($key){
       return $this->vars[$key];
     }

     // Set Template variables
     public function __set($key, $value){
       $this->vars[$key] = $value;
     }

     // Convert Object To String
     public function __tostring(){
       extract($this->vars);
       chdir(dirname($this->template));
       return ob_get_clean();
     }
  }

?>
