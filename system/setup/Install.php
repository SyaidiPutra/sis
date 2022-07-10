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
            $_SESSION['stap'] = '1';
            // die();
        }



        if(isset($link[1])){
            $page = (int) $_SESSION['stap'];
            unset($_SESSION['stap']);
            if($link[1] == 'nextpage'){
                $page = $page + 1;
                $this->going();
            }elseif($link[1] == 'backpage'){
                $page = $page - 1;
                $this->going();
               
            }elseif($link[1] == 'DBConnect'){

            }
            $_SESSION['stap'] = $page;
        }

        switch ($_SESSION['stap']) {
            case '1':
                require_once('../system/setup/views/stap1.php');
                break;
            case '2':
                require_once('../system/setup/views/stap2.php');
                break;
            
            default:
                echo 'Error 404 : Page Not Found';
                break;
        }
    }

    private function databases($input)
    {
        $mysql = mysqli_connect($input['hots'], $input['username'], $input['password'], $input['name'], $input['port']);
        if(mysqli_errno($mysql)){
            $retrun = [
                "status" => false,
                "msg" => mysqli_error($mysql)
            ];
        }else{
            $retrun = [
                "status" => true
            ];
        }
        return $retrun;
    }

    private function going()
    {
        header('Status: 301 Moved Permanently', false, 301);
        header("Location: ".BASE_URL."/install");
        exit();
    }

}