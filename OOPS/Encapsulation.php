<?php

class math
{
    function sum($a, $b)
    {

        return $a + $b;
    }

    function sum3($a, $b, $c)
    {

        return $a + $b + $c;
    }
}

$sam = new math;

echo $sam->sum(5, 5);
echo "<br>";

echo $sam->sum(4, 4);
echo "<br>";

echo $sam->sum(6, 6);
echo "<br>";

echo $sam->sum3(4,5,6);
echo "<br>";

echo $sam->sum3(9, 8, 9);

?>