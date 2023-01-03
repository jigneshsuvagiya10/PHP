<?php

$balance=array(
    array(55.5,65.6,75.7,85.8,95.9),
    array(54.4,64.4,74.4,84.8,94.4),
    array(46.5,56.5,66.5,76.5,86.5));
    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            echo $balance[$i][$j] ."&emsp;";

        }
        echo "<br>";
    }

?>