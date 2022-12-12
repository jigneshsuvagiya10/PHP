<?php 

class sum{
    function add($a,$b){

        return $a+$b;
    }
}

class avr extends sum {

    function avrage($x,$y){

        $s= $this->add($x,$y);

        $av = $s / 2;

        echo "sum = ".$s;
        echo "<br>";
        echo "average = ".$av;

    }

}

$math = new avr;

$math->avrage(5, 5);
echo "<br>";
echo $math->add(2, 3);

?>