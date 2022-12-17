<?php 

class finalmethod{

    final public function FunctionName()
    {
        echo "final";
    }
}

class child extends finalmethod{

    // public function FunctionName()  //Cannot override final method
    // {
    //     echo "new";
    // }
}

$obj = new child;

$obj->FunctionName();



?>