<?php

class siswa extends Controller{
  
  public function __construct(){
    $this->db = new Databases;
  }
  
  public function index ()
  {
    $this->view('layout/header');
    $this->view('layout/navbar', [
              'title' => 'Siswa',
              'subTitle' => ''
                ]);
    $this->view('layout/sidebar');

    $this->view('admin/siswa/index');

    $this->view('layout/footer');
  }
  
  public function create ()
  {
    $this->view('layout/header');
    $this->view('layout/navbar', [
              'title' => 'Siswa',
              'subTitle' => 'Create'
                ]);
    $this->view('layout/sidebar');

    $this->view('admin/siswa/create');

    $this->view('layout/footer');
  }
  
  public function save($data, $go)
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->db->table('studens')->insert($data);
      $this->go($go);
    }else{
      echo 'erorr 403 : access denied';
    }
  }
  
  
  
}
