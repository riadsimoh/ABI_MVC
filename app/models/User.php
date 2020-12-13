<?php

class User {

  private $db;


  public function __construct(){
    $this->db = new Database();
  }

  public function register($data) {

  $this->db->query('INSERT INTO USERS (LOGINUSER, PASSUSER) VALUES(:userlogin,  :passwords )');
  $this->db->bind(':userlogin', $data['userlogin']);
  $this->db->bind(':passwords', $data['password']);
  
  if($this->db->execute()) {

    return true;
  }
  else {
    return false;
  }
}
  public function login($userlogin, $password){
      $this->db->query('SELECT * FROM USERS WHERE LOGINUSER = :userlogin');
      $this->db->bind(':userlogin', $userlogin);

      $row = $this->db->single();

      $hashed_password = $row->PASSUSER;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
  }


   // Find user by userlogin
   public function findUserByUserLogin($userlogin){
    $this->db->query('SELECT * FROM USERS WHERE LOGINUSER= :userlogin');
    $this->db->bind(':userlogin', $userlogin);

    $row = $this->db->single();

    // Check row
    if($this->db->rowCount() > 0){
      return true;
    } else {
      return false;
    }
  }



}