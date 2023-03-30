<?php
include_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
        if (isset($_SERVER['PATH_INFO'])) {

            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/header.php");
                    include_once("views/home.php");
                    break;
                case '/registration':
                    include_once("views/header.php");
                    include_once("views/registration.php");
                    break;
                case '/login':
                    include_once("views/login.php");
                    break;
                // case '/home':
                //     include_once("views/header.php");
                //     include_once("views/home.php");
                //     break;

                default:
                    break;
            }
        } else {
            include_once("views/header.php");
            include_once("views/home.php");
        }
    }
};
$controller = new controller;
