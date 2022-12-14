<?php

$a = 0;
$b = 1;
$c = null;

echo "Fibonacci searis : $a - $b";
for ($i = 0;$i < 8;$i++){

    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo " - $c";

} 


?>