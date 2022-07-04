<?php

class siswa extends Controller{
  
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
}
