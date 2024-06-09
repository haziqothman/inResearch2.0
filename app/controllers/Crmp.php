<?php 
class Crmp extends Controller {
  public function index()
  {
      $data['judul'] = 'Daftar Mahasiswa';
      

      $this->view('crmp/index', $data);
  }
}