<?php

class admin extends Controller{
  
    public function __construct(){
      $this->db = new Databases;
      $this->input = new Request;
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
    public function siswa ($page = 'index')
    {
      require_once('admin/siswa.php');
      $siswa = new siswa();
      
      switch ($page) {
        
        case 'index':
          $siswa->index();
          break;
        
        case 'create':
          $siswa->create();
          break;
        
        case 'save':
          $siswa->save($this->input->post(), '/admin/siswa');
          break;
        
        default:
          die('error 404 : Page Not FFond');
          break;
      }
      
    }
    public function table()
    {
        $db = new Databases;
        var_dump($db->table('wp_users')->first()->get());
    }
}