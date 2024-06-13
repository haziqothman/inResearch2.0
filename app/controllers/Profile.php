<?php 
class Profile extends Controller {
   public function getProfile()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $id = $_SESSION["id"];

      echo json_encode($this->model('Platinum_model')->getUserById($id));
     
  }

  public function edit()
  {
    if($this->model('Platinum_model')->editUser($_POST) > 0 ){
      // header('Location: ' . BASEURL . '/platinum/profile');
         $_SESSION["name"] = $_POST["name"];
         header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
  }
}