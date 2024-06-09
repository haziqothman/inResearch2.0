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
      $data['users'] =  $this->model('Platinum_model')->getUserByRole($role); 
  
      $this->view('templates/header', $data);
      $this->view('platinum/list', $data);
      $this->view('templates/footer', $data);
    
  }
  public function profile($id)
  {
      $data['judul'] = 'Daftar Mahasiswa';
      $role = $_SESSION["role"];
      $data['user'] =  $this->model('Platinum_model')->getUserByIdAndRole($id, $role); 
    
      $this->view('templates/header', $data);
      $this->view('platinum/profile', $data);
      $this->view('templates/footer', $data);
    
  }
}