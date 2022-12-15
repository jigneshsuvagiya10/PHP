<?php 

class main{

    public static $data = "Somthing";

    public static function FunctionName()
    {
        echo "<br>function data";

    }
}

echo main::$data;
main::FunctionName();

?>