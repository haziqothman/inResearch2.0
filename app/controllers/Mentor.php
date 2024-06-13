<?php 
class Mentor extends Controller 
{public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      
      $this->view('templates/header', $data);
      $this->view('mentor/index', $data);
      $this->view('templates/footer', $data);
  }
  public function viewAll() {
    $data['judul'] = 'View All Users';
    $data['users'] = $this->model('Platinum_model')->getAllUser(); 

    $this->view('templates/header', $data);
    $this->view('mentor/viewAll', $data);
    $this->view('templates/footer', $data);
}

  public function profile()
  {
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role); 
      $this->view('templates/header', $data);
      $this->view('mentor/profile', $data);
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
          header('Location: ' . BASEURL . '/mentor/profile');
        }
      }
  }
}
