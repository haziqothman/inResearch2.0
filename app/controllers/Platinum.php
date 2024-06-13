<?php 
class Platinum extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      
      $this->view('templates/header', $data);
      $this->view('platinum/index', $data);
      $this->view('templates/footer', $data);
  }
  public function list()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      var_dump($role);
      $data['users'] =  $this->model('Platinum_model')->getUserByRole($role); 
  
      $this->view('templates/header', $data);
      $this->view('platinum/list', $data);
      $this->view('templates/footer', $data);
    
  }
  public function profile()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role);
  
      // Debugging
      error_log('User Data: ' . print_r($data['user'], true));
  
      $this->view('templates/header', $data);
      $this->view('platinum/profile', $data);
      $this->view('templates/footer', $data);
  }
  
  public function listProfile($id)
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role);
    
      // Debugging
      error_log('User Data: ' . print_r($data['user'], true));
  
      $this->view('templates/header', $data);
      $this->view('platinum/listProfile', $data);
      $this->view('templates/footer', $data);
  }

  public function getProfile()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];

      echo json_encode($this->model('Platinum_model')->getUserById($id));
     
  }

  public function edit()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION['role'];
      if ($role == 'Platinum') {
        if($this->model('Platinum_model')->editUser($_POST) > 0 ){
          header('Location: ' . BASEURL . '/platinum/profile');
        }
      }
  }

  
}