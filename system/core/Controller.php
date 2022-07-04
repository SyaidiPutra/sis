<?php
class Controller {
  
    public function view($view, $data =[])
    {
        $dir_view = '../system/views/';
        if(file_exists($dir_view. $view . '.php')){
            require_once $dir_view. $view . '.php';
        }else{
            die("View {$view} Not Fond");
        }
    }
}