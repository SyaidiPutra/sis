<?php

class Install {

    public function run()
    {
        
        $link = (isset($_SERVER['PATH_INFO']))? $_SERVER['PATH_INFO'] : '';
        $link = explode('/',trim($link,'/'));
        
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
            }elseif($link[1] == 'UserCreate'){
                $page = $page + 1;
                $this->useradmin($_POST);
            }elseif($link[1] == 'proses'){
                $this->intall($link[2]);
                exit;
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
            case '4':
                require_once('../system/setup/views/stap4.php');
                break;
            case '5':
                require_once('../system/setup/views/proses.php');
                break;
            default:
                var_dump($_SESSION['stap']);
                echo 'Error 404 : Page Not Found';
                break;
        }
    }

    private function intall($sesi)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            header("Content-Type: application/json; charset=UTF-8");
            switch ($sesi) {
                case 'config':
                    
                    break;
            }
        }
    }

    private function useradmin($data)
    {
        $old = json_decode($_SESSION['config'], true);
        $new = array_merge($old, ['account' => $data]);
        $_SESSION['config'] = json_encode($new);
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