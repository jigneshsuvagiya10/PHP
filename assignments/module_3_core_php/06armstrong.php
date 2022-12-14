<?php

$a = 9474;
$sum = 0;
$x = $a;

while ($x != 0) {

    $b = $x % 10;
    $sum = $sum + $b * $b * $b * $b;
    $x = $x / 10;
}

    if ($sum == $a) {
    echo " $a is armstrong number";
}else {
    echo " $a is not armstrong number";
}

?>