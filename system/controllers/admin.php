<?php

class admin extends Controller{
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
    public function table()
    {
        $db = new Databases;
        var_dump($db->table('wp_users')->first()->get());
    }
}