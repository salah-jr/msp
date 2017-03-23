<?php
require ('../config/config.php');
?>

 <?php
 class User{
   private $db;
   public function __construct(){
     $this->db = new Database;
   }
   //register method
   public function register($data){
     //Insert query
     $this->db->query('INSERT INTO users (name, username, email, password, about)
                           VALUES(:name, :username, :email, :password, :about )');
     //Bind VALUES
     $this->db->bind(':name', $data['name']);
     $this->db->bind(':username', $data['username']);
     $this->db->bind(':email', $data['email']);
     $this->db->bind(':password', $data['password']);
     $this->db->bind(':about', $data['about']);

     //execute
     if($this->db->execute()){
       return true;
     } else {
       return false;
     }

     //return $this->db->execute();
   }
   public function login($username, $password){
      $this->db->query('SELECT * FROM users
                                WHERE username=:username
                                AND password=:password ');
      //Bind VALUES
      $this->db->bind(':username', $username);
      $this->db->bind(':password', $password);

      $row = $this->db->single();

      //Check rows
      if($this->db->rowCount() > 0){
        $this->setUserData($row);
        return true;
      }else {
        return false;
      }
  }
  public function setUserData($row){
    $_SESSION['is_logged_in'] = true;
    $_SESSION['user_id'] = $row->id;
    $_SESSION['username'] = $row->username;
    $_SESSION['name'] = $row->name;
  }
  public function logout(){
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    return true;
  }
 }
 ?>
