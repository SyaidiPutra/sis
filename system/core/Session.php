<?php
class Session 
{
    public function __construct()
    {
        session_start();
    }
    public function put($name, $val)
    {
        $_SESSION[$name] = $val;
    }
    public function get($name)
    {
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return null;
        }
    }
    public function flasdata_put($name, $value)
    {
        setcookie($name, $value, time() + 20, "/");
    }
    public function flasdata($name)
    {
        if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }else{
            return null;
        }
    }
}
