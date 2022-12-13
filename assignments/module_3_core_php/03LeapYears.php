<?php

$a = 0;

echo "Leap years between 1901 to 2016 = ";
for ($i=1901; $i <= 2016 ; $i++) { 

    if ($i%4 == 0) {
        $a++;

        echo "$i ";
    }

}

echo "<br>Number of leap years between 1901 to 2016 = $a";

?>