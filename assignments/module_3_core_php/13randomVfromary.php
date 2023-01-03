<?php

$a=array("12","10","15","20","40","50","60","70");
$n=5;
$j=array_rand($a,$n);
for($i=0;$i<$n;$i++){
    echo $a[$j[$i]];
    echo "<br>";

}

?>