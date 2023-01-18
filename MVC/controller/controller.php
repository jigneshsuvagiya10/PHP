<?php
require_once("model/model.php");
// echo "<pre>";

// print_r($_SERVER);

session_start();



class controller extends model{
    
    public function __construct()
    {
        parent::__construct();
        ob_start();

        // echo "called controller";

        $base_url = "http://localhost/php/MVC/";
        $admin_url = "http://localhost/php/MVC/assets/adminassets/";
        


        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                
                include_once("views/header.php");
                include_once("views/homepage.php");
                include_once("views/footer.php");
                
                break;
            case '/about':
                
                include_once("views/header.php");
                echo "<h1>About</h1>";
                include_once("views/footer.php");
        
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
            case '/api':
                
                include_once("views/header.php");
                include_once("views/apicalling.php");
                include_once("views/footer.php");
                
                break;
            case '/login':
                
                include_once("views/header.php");
                include_once("views/login.php");
                include_once("views/footer.php");

                    if (isset($_REQUEST["login"])) {

                        $log = $this->login($_POST["name"], $_POST["password"]);

                        if ($log['code']==1) {

                            $_SESSION['userdata'] = $log['data'][0];

                            if ($log['data'][0]->no == 2) {
                                header('location:adminhome');
                            } else {
                                header('location:home');
                            }
                                # code...
                                // echo "<pre>";
                                // print_r($log['data'][0]->no);
                                // echo "</pre>";
                            
                        } else {
                            echo "<script>alert('Invelid name OR password')</script>";
                        }
                        // echo "<pre>";
                        // print_r($log);
                        // echo "</pre>";
                    }
                
                break;
            case '/registration':
                
                include_once("views/header.php");
                include_once("views/registration.php");
                include_once("views/footer.php");

                if (isset($_REQUEST["reg"])) {

                        array_pop($_REQUEST);
                        // print_r($_REQUEST);

                     $reg = $this->insert("user",$_REQUEST);

                     if ($reg['code']== 1) {

                            header("location:login");

                     } else {
                            echo "ERROR";
                     }
                     
                }

                break;
                
            }
                
            }else {
                    header("location:home");
            }
        ob_flush();
    }
}

$controller = new controller;

?>