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

  public function profile()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role); 

      if (!$data['user']) {
        // Handle case where user is not found or role mismatch
        // You could redirect to an error page or show a not found message
        die('User not found or role mismatch.');
      }
    
      $this->view('templates/header', $data);
      $this->view('staff/profile', $data);
      $this->view('templates/footer', $data);
    
  }

  public function getProfile()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];

      echo json_encode($this->model('Platinum_model')->getUserById($id));
     
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

  public function report() {
    $data['judul'] = 'User Profile Report';
    $data['users'] = $this->model('Platinum_model')->getAllUser(); 

    $this->view('templates/header', $data);
    $this->view('staff/report', $data);
    $this->view('templates/footer', $data);
}
}