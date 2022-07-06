<?php

class Auth {
    public function __construct(){
      $this->db = new Databases;
      $this->input = new Request;
    }
    public function index()
    {
      
    }
    public function login()
    {
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $input = $this->input->post();
      $user = $this->db->table('user')->where('username',$input['username'])->first()->get();
      if($user){
        if(password_verify($user['password'],$input['password']){
          
          }
        }
      }
      }else{
        echo 'erorr 403 : access denied';
      }
    }
}