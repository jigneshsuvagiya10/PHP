<?php
require_once("model/model.php");
session_start();

class controller extends model
{

    public function __construct()
    {
        parent::__construct();
        ob_start();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    echo "API EXP";
                    break;
                case '/about':

                    include_once("views/header.php");
                    echo "<h1>About</h1>";
                    include_once("views/footer.php");

                    break;
                case '/alluser':
                    $all = $this->select("user");

                    // echo "<pre>";
                    // print_r($all);

                    echo json_encode($all);

                    break;
                case '/adminhome':

                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/adminhome.php");
                    include_once("views/admin/adminfooter.php");
                    break;
                case '/services':

                    include_once("views/header.php");
                    echo "<h1>Services</h1>";
                    include_once("views/footer.php");

                    break;
                case '/contact':

                    include_once("views/header.php");
                    echo "<h1>Contact</h1>";
                    include_once("views/footer.php");

                    break;
                case '/login':

                    $data = json_decode(file_get_contents('php://input'), true);
                    if ($data['name'] != "" && $data['password'] != "") {
                        $log = $this->login($data["name"], $data["password"]);
                        echo json_encode($log);

                        // if ($log['code'] == 1) {

                        //     $_SESSION['userdata'] = $log['data'][0];

                        //     if ($log['data'][0]->no == 2) {
                        //         header('location:adminhome');
                        //     } else {
                        //         header('location:home');
                        //     }
                        // } else {
                        //     echo "<script>alert('Invelid name OR password')</script>";
                        // }
                        // echo "<pre>";
                        // print_r($log);
                        // echo "</pre>";
                    }else{
                        echo "User Name and Password is required";
                    }

                    //  if ($reg['code']== 1) {

                    //         header("location:login");

                    //  } else {
                    //         echo "ERROR";
                    //  }

                    break;
                case '/registration':

                    $data = json_decode(file_get_contents('php://input'), true);
                    // print_r($data);
                    if ($data['name'] != "" && $data['password'] != "") {
                        $reg = $this->insert("user", $data);
                        echo json_encode($reg);
                        //     if (res== 1) {

                        //         header("location:login");

                        //  } else {
                        //         echo "name and password required 1";
                        //  }
                    } else {
                        echo "name and password required";
                    }

                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controller = new controller;
