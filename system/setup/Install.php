<?php

class Install {

    public function run()
    {
        // session_start();   

        // unset($_SESSION['stap']);

        // die(var_dump($_SESSION));

        $link = explode('/',trim($_SERVER['PATH_INFO'],'/'));
        
        if($link[0] !== 'install' ){
            // header('Status: 301 Moved Permanently', false, 301);
            // header("Location: ".BASE_URL."/install");
            exit();
            die('s1');
        }
        if(!isset($_SESSION['stap'])){
            $_SESSION['stap'] = 1;
            // die();
        }



        if(isset($link[1])){
            $page = (int) $_SESSION['stap'];
            unset($_SESSION['stap']);
            if($link[1] == 'nextpage'){
                $page = $page + 1;
            }elseif($link[1] == 'backpage'){
                $page = $page - 1;
            }elseif($link[1] == 'DBConnect'){
              $page = $page + 1;
              $this->databases($_POST);
            }
            $_SESSION['stap'] = $page;
            $this->going();
        }
        // die(var_dump($_SESSION['stap']));
        switch ($_SESSION['stap']) {
            case '1':
                require_once('../system/setup/views/stap1.php');
                break;
            case '2':
                require_once('../system/setup/views/stap2.php');
                break;
            case '3':
                require_once('../system/setup/views/stap3.php');
                break;
                
            default:
                var_dump($_SESSION['stap']);
                echo 'Error 404 : Page Not Found';
                break;
        }
    }

    private function databases($input)
    {
        $mysql = mysqli_connect($input['hots'], $input['username'], $input['password'], $input['name'], $input['port']);
        if(!$mysql){
            $retrun = [
                "status" => false,
                "data" => [
                  "msg" => mysqli_connect_error()
                  ]
            ];
        }else{
            $retrun = [
                "status" => true,
                "data" => $input
            ];
        }
        $_SESSION['config'] = json_encode(["db" => $retrun]);
    }

    private function going()
    {
        header('Status: 301 Moved Permanently', false, 301);
        header("Location: ".BASE_URL."/install");
        exit();
    }

}