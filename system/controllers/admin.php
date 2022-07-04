<?php

class admin extends Controller{
    public function index()
    {
        $this->view('layout/header');
        $this->view('layout/navbar');
        $this->view('layout/sidebar');

        //$this->view('admin/index');
        $this->view('admin/siswa');

        $this->view('layout/footer');
    }
    public function table()
    {
        $db = new Databases;
        var_dump($db->table('wp_users')->first()->get());
    }
}