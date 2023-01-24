<?php

include_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/inquiry':
                    $data = json_decode(file_get_contents('php://input'), true);
                    if ($data['name'] != "") {
                        $Res = $this->insert("inquiry", $data);
                        echo json_encode($Res);
                    } else {
                        echo "Username and password is required.";
                    }
                    break;

                case '/adduser':
                    $data = json_decode(file_get_contents("php://input"), true);
                    // print_r($data);
                    if ($data['user_name'] != "" && $data['user_email'] != "" && $data['user_mobile_no'] != "" && $data['user_password'] != "" && $data['user_course'] != "" && $data['user_class'] != "") {
                        $Res = $this->insert("users", $data);
                        echo json_encode($Res);
                    } else {
                        echo "All Data required";
                    }

                    break;

                case '/loginuser':
                    $data = json_decode(file_get_contents('php://input'), true);
                    if ($data['user_name'] != "" && $data['user_password'] != "") {
                        $Res = $this->login($data['user_name'], $data['user_password']);
                        echo json_encode($Res);
                    } else {
                        echo "Username and password is required.";
                    }

                default:
                    # code...
                    break;
            }
        } else {
            header('location:home');
        }
        ob_flush();
    }
}

$controller = new controller;
