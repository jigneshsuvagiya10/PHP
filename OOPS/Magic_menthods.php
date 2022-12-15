<?php 

class magic{

    public function __get($name)
    {
        echo $name;
    }

    public function __set($name, $value)
    {
        echo "<br>variable :".$name ,"<br>variable value :".$value;   
    }

    public function __call($functionname, $arguments)
    {
        echo "<br>" . $functionname, " * FROM " . $arguments[0];
        echo "<br>" . $functionname, " * FROM " . $arguments[1];
    }
}

$mobj = new magic;

$mobj->get;
$mobj->max=999;
$mobj ->select("name","address");


?>