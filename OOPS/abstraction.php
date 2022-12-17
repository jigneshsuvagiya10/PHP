<?php 

abstract class abstractclass {

    abstract public function abstractFunction();

    public function simplefun()
    {
        echo "simple fun<br>";
    }

}

class child extends abstractclass {
    
    public function abstractFunction()
    {
        echo "Abstract function<br>";
    }

    public function childFunction()
    {
        echo "child function<br>";
    }
}

$obj = new child;

$obj->abstractFunction();
$obj->simplefun();
$obj->childFunction();

?>

<p>Abstaction => hide something</p>
<p>Parent will declared abstracted method, abstracted methods only declared by abstracted class only </p>
<p>Abstracted class cant be initiated/able to object create </p>