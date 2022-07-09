<?php

class Request {
  public function post($key = null)
  {
    if($key == null){
      $post = (isset($_POST))? $_POST : null;
    }else{
      $post = (isset($_POST[$key]))? $_POST[$key] : null;
    }
    return $post;
  }
  public function get($key = null)
  {
    if($key == null){
      $get = (isset($_GET))? $_GET : null;
    }else{
      $get = (isset($_GET[$key]))? $_GET[$key] : null;
    }
    return $get;
  }
}
