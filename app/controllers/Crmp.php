<?php 
class Crmp extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      
      $this->view('templates/header', $data);
      $this->view('crmp/index', $data);
      $this->view('templates/footer', $data);
  }
  public function list()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $data['users'] =  $this->model('Platinum_model')->getUserByRole($role); 
  
      $this->view('templates/header', $data);
      $this->view('crmp/list', $data);
      $this->view('templates/footer', $data);
    
  }
  public function profile()
  {
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role); 
      $this->view('templates/header', $data);
      $this->view('crmp/profile', $data);
      $this->view('templates/footer', $data);
  }

  public function getProfile()
  {
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];

      echo json_encode($this->model('Platinum_model')->getUserById($id));
     
  }

  public function edit()
  {
      $role = $_SESSION['role'];
      if ($role == 'Platinum') {
        if($this->model('Platinum_model')->editUser($_POST) > 0 ){
          header('Location: ' . BASEURL . '/crmp/profile');
        }
      }
  }
}