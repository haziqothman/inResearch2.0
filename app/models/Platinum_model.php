<?php

class Platinum_model{
  private $table = 'users';
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function getUserByRole($role) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE role = :role');
    $this->db->bind('role', $role);
    return $this->db->resultSet();
  }

   public function getUserById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function getUserByIdAndRole($id, $role) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id AND role = :role');
    $this->db->bind('id', $id);
    $this->db->bind('role', $role);
    return $this->db->single();
  }

  public function getAllUser() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function insertUser($data) {
    $query = "INSERT INTO users (name, email, phone, role, matric, password, address) VALUES (:name, :email, :phone, :role, :matric, :password, :address)";

    
    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('phone', $data['phone']);
    $this->db->bind('role', $data['role']);
    $this->db->bind('matric', $data['matric']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('address', $data['address']);
    
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function editUser($data) {
    error_log('Edit user data: ' . print_r($data, true)); // Log received data
    
    $query = "UPDATE users SET 
        name = :name, 
        email = :email, 
        phone = :phone,
        role = :role, 
        matric = :matric, 
        address = :address,
        password = :password 
        WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('phone', $data['phone']);
    $this->db->bind('role', $data['role']);
    $this->db->bind('matric', $data['matric']);
    $this->db->bind('address', $data['address']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('id', $data['id']);

    try {
        $this->db->execute();
    } catch (PDOException $e) {
        error_log('Error: ' . $e->getMessage()); // Log SQL error message
        echo 'Error: ' . $e->getMessage();
        return 0;
    }

    return $this->db->rowCount();
}


  
}