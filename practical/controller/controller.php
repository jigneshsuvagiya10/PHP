<?php
include_once("model/model.php");
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
                    include_once("views/header.php");
                    include_once("views/home.php");
                    break;
                case '/registration':
                    include_once("views/header.php");
                    include_once("views/registration.php");

                    if (isset($_REQUEST["reg"])) {

                        array_pop($_REQUEST);
                        // print_r($_REQUEST);

                        $reg = $this->insert("user", $_REQUEST);

                        if ($reg['code'] == 1) {

                            header("location:home");
                        } else {
                            echo "ERROR";
                        }
                    }


                    break;
                case '/login':
                    include_once("views/header.php");
                    include_once("views/login.php");

                    if (isset($_REQUEST["log"])) {

                        $log = $this->login($_POST["email"], $_POST["password"]);

                        if ($log['code']==1) {

                            $_SESSION['userdata'] = $log['data'][0];

                            // if ($log['data'][0]->no == 2) {
                            //     header('location:adminhome');
                            // } else {
                            //     header('location:home');
                            // }
                            header('location:home');
                                # code...
                                // echo "<pre>";
                                // print_r($log['data'][0]->no);
                                // echo "</pre>";
                            
                        } else {
                            echo "<script>alert('Invelid name OR password')</script>";
                        }
                    }

                    break;
                    case '/logout':
                        session_destroy();
                        header("location:login");
                        break;

                default:
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
};
$controller = new controller;
