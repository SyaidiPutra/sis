<?php

define("BASE_URL", "http://localhost/sis/public");
define("URL_TEMP", "http://localhost/sis/Template/template/");

// if( !session_id() ) session_start();
if(!session_id()){
    session_start();
    // die('set session');
}


if(file_exists('../system/Config.cof')){
    require_once '../system/bootstrap.php';
    $app = new App();
}else{
    require_once '../system/setup/Install.php';
    $app = new Install();
    $app = $app->run();
;}
