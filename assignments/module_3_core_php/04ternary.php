<?php

$a = 50;
$b = 60;
$c = 40;

$max = ($a > $b) ? $a : $b;

($max > $c) ? $max : $c;

echo "max number is $max";

$x = 10;
$y = 50;
$z = 80;
echo "<br> Max number is ";
echo ((($x > $y) ? $x : $y) > $z) ? (($x > $y) ? $x : $y) : $z;


?>