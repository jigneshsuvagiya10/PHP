<?php 

trait addition{
    public function add(int $a ,int $b)
    {
        echo "<br>Addition = ". ($a+$b);
    }
}
trait multiplication{
    public function mul(int $a ,int $b)
    {
        echo "<br>multiplication = " . $a * $b;
    }
}
trait devisen{
    public function dev(int $a ,int $b)
    {
        echo "<br>devisen = " . $a / $b;
    }
}

class c1{

    use addition, devisen, multiplication;
    public function f1(int $x,int $y)
    {
        $this->add($x,$y);
        $this->mul($x,$y);
        $this->dev($x,$y);
    }
}

$obj = new c1;
$obj->F1(20, 5);

?>

<p>we call many trait in one class or function without inherit any class</p>
<p>add tarit that class where we whant to use.</p>
<p>we call trait using this keyword.</p>