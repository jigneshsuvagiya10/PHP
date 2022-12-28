<?php
require_once("model/model.php");
// echo "<pre>";

// print_r($_SERVER);



class controller extends model{
    
    public function __construct()
    {
        parent::__construct();

        // echo "called controller";

        $base_url = "http://localhost/php/MVC/";



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
                
                include_once("views/header.php");
                include_once("views/login.php");
                include_once("views/footer.php");
                
                break;
            case '/registration':
                
                include_once("views/header.php");
                include_once("views/registration.php");
                include_once("views/footer.php");

                if (isset($_REQUEST["reg"])) {

                        array_pop($_REQUEST);
                        print_r($_REQUEST);

                        $this->insert("users",$_REQUEST);
                }



            
                
                break;
                
            }
                
            }else {
                    header("location:home");
            }
    }
}

$controller = new controller;

?>