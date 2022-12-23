<?php

// echo "<pre>";

// print_r($_SERVER);



class controller{
    
    public function __construct()
    {
        $base_url = "http://localhost/php/MVC/";
        
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
           
            
        }
    }
}

$controller = new controller;

?>