<?php

class App {
    protected $controller   = 'Auth';
    protected $method       = 'index';
    protected $param        = [];
    public function __construct()
    {
        $url = $this->parseURL();

        // controller
        $dir_controllers = '../system/controllers/';
        if(isset($url[0])){
            if(file_exists($dir_controllers . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            }else{
                die("Controller {$url[0]} not found");
            }
        }else{
            if(!file_exists($dir_controllers . $this->controller . '.php')){
                die("Controller " . $this->controller. " not found");
            }
        }

        require_once $dir_controllers . $this->controller . '.php';
        $this->controller = new $this->controller;
        // endCOntroller

        // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }else{
                die("Method {$url[1]} Not Found");
            }
        }else{
            if(!method_exists($this->controller, $this->method)){
                die("Method {$this->method} Not Found");
            }
        }
        // endMethod

        // parameter
        if(!empty($url)){
            $this->param = array_values($url);
        }
        // endParameter

        call_user_func_array([$this->controller, $this->method], $this->param);

    }
    public function parseURL()
    {
        $parse = [];
        if(isset($_SERVER['PATH_INFO'])){
            $parse = explode('/', filter_var(trim($_SERVER['PATH_INFO'], '/'),FILTER_SANITIZE_URL));
        }
        return $parse;
    }
}