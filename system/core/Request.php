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
}
