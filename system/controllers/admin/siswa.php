<?php

class siswa extends Controller{
  
  public function __construct(){
    $this->db = new Databases;
  }
  
  public function index ()
  {
    echo('daftarsiswa');
  }
  
  public function create ()
  {
    $this->view('layout/header');
    $this->view('layout/navbar', [
              'title' => 'Siswa',
              'sunTitle' => 'Create'
                ]);
    $this->view('layout/sidebar');

    $this->view('admin/siswa/create');

    $this->view('layout/footer');
  }
  
  public function save($data)
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->db->table('studens')->insert($data);
    }else{
      echo 'erorr 403 : access denied';
    }
  }
  
}
