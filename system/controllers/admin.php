<?php

class admin extends Controller{
    public function index()
    {
        $this->view('admin/index');
    }
    public function table()
    {
        $db = new Databases;
        var_dump($db->table('wp_users')->first()->get());
    }
}