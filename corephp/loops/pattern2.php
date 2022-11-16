<?php

for ($i=0; $i < 5 ; $i++) { 
 
    for ($j=0; $j < 5 ; $j++) { 

        echo " $i ";
  }
  echo "<br>";
}

echo "<br>";

for ($i=1; $i < 6 ; $i++) { 
 
    for ($j=1; $j <= $i ; $j++) { 

        echo " $i ";
  }
  echo "<br>";
}

echo "<br>";
$a = 0;

for ($i=0; $i < 5 ; $i++) { 
 
    for ($j=0; $j <= $i ; $j++) { 

        echo " $a ";
        $a++;
    }   
  echo "<br>";
}

?>

