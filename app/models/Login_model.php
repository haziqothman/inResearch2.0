<?php

class Login_model{
  private $table = 'users';
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function getUserByEmail($email) {
     $this->db->query('SELECT * FROM users WHERE email = :email');
     $this->db->bind('email', $email);
     return $this->db->single();
  }
}