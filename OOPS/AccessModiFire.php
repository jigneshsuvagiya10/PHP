<?php 

class main{

    public $public = "(public)all access<br>";
    protected $protected = "(protected)main and cild class access<br>";
    private $private = "(private)only main class access<br>";

    public function mainFunction()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;

    }
}

class child extends main{

    public function childFunction()
    {
        echo "<br>";
        echo " child class <br>";
        echo $this->public;
        echo $this->protected;
    }
}

$obj = new child;

$obj->mainFunction();
$obj->childFunction();

?>