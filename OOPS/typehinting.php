<?php 

class C1{
    public function F1(C2 $obj2)
    {
        echo "<br>parent class access child class function.<br>";

           //parent class acees child class datamember and member function by child class object

        $obj2->F2();

        echo "<br>SUM = " . $obj2->F3(3, 5);
    }
}

class C2{

    public function F2()
    {
        echo "<br>F2 function calling";
    }

    public function F3(int $a , int $b)
    {
        return $a + $b;
    }
}

$obj1 = new C1;
$obj2 = new C2;

$obj1->F1($obj2);

//$obj2->F3(65,abc);------must be of the type int, string given,

?>