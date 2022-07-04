<?php

class admin extends Controller{
  
    public function __construct(){
      $this->db = new Databases;
    }
    public function index()
    {
        $this->view('layout/header');
        $this->view('layout/navbar', [
          'page' => 'Dashboard'
          ]);
        $this->view('layout/sidebar');

        $this->view('admin/index');

        $this->view('layout/footer');
    }
    public function siswa ($page = null)
    {
      require_once('admin/siswa.php');
      $siswa = new siswa();
      
      switch ($page) {
        default:
          $siswa->index();
          break;
      }
      
    }
    public function table()
    {
        $db = new Databases;
        var_dump($db->table('wp_users')->first()->get());
    }
}