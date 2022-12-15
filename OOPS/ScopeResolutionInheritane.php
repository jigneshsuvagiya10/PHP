<?php 

class main{

    public static $data = "Somthing";

    public static function parentFunction()
    {
        echo self::$data;
        echo "<br>parent function";
    }
}

class child extends main {

    public static function childFunction()
    {
        parent::parentFunction();
        echo "<br> child function";
    }

}

child::childFunction();

?>