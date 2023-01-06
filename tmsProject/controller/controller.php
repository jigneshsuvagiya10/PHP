<?php
//require_once("model/model.php");


class controller{
    public $static_base_url = "http://localhost/php/tmsProject/assets/";
    public function __construct()
    {
        // parent::__construct();
        ob_start();

        if(isset($_SERVER['PATH_INFO'])){
            switch ($_SERVER['PATH_INFO']){

                case '/home':
                    include_once("views/header.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/about':
                    include_once("views/header.php");
                    include_once("views/about.php");
                    break;
                case '/CurrentAddairs':
                    include_once("views/header.php");
                    include_once("views/Current%20Affairs.php");
                    include_once("views/footer.php");
                    break;
                case '/Materials':
                    include_once("views/header.php");
                    include_once("views/Materials.php");
                    break;
                case '/Privacy':
                    include_once("views/header.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/contact':
                    include_once("views/header.php");
                    include_once("views/contact.php");
                    //include_once("views/footer.php");
                    break;
            
            }
    }else {
            header("location:home");
    }

    
}

 }
  $controller = new Controller;

ob_flush();

?>