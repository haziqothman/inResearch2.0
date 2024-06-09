<?php 
class Staff extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      
      $this->view('templates/header', $data);
      $this->view('staff/index', $data);
      $this->view('templates/footer', $data);
  }

  public function list()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      if ($role == "Staff") {
        $data['users'] =  $this->model('Platinum_model')->getAllUser();
      } else {
        $data['users'] = [];
      }
      
  
      $this->view('templates/header', $data);
      $this->view('staff/list', $data);
      $this->view('templates/footer', $data);
    
  }
  
  public function insert()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION['role'];
      if ($role == 'Staff') {
        if($this->model('Platinum_model')->insertUser($_POST) > 0 ){
          header('Location: ' . BASEURL . '/staff/list');
        }
      }
  }

  public function getEdit()
  {
      echo json_encode($this->model('Platinum_model')->getUserById($_POST['id']));
  }

  public function edit()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION['role'];
      if ($role == 'Staff') {
        if($this->model('Platinum_model')->editUser($_POST) > 0 ){
          header('Location: ' . BASEURL . '/staff/list');
        }
      }
  }
}