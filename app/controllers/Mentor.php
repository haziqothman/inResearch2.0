<?php 
class Mentor extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      

      $this->view('mentor/index', $data);
  }
}