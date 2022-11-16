<?php

for ($i=0; $i < 5; $i++) { 

        for ($j=0; $j <5 ; $j++) { 
            echo " * ";
            
        }
        echo "<br>";
}


echo "<br>";

for ($i=0; $i < 5; $i++) { 

        for ($j=0; $j <5 ; $j++) { 
        
            if ($i == $j) {
                echo " $ ";
            }
            else{
                echo " * ";
            }
        }
        echo "<br>";
}


echo "<br>";

for ($i=0; $i < 5; $i++) { 

    for ($j=0; $j <= $i ; $j++) { 
        
       echo " * ";
      
    }
    echo "<br>";
}

echo "<br>";

for ($i=0; $i < 5; $i++) { 

        for ($j=0; $j < 5 ; $j++) { 
            
            if ($j <$i) {
                echo " _ ";
            }
            else{
                echo " * ";
            }
            
        }
        echo "<br>";
}

echo "<br>";

for ($i=0; $i < 5; $i++) { 

    for ($j=0; $j < 5 ; $j++) { 
        
        if ($i == $j) {
            echo " * ";
        }
        else{
            echo " _ ";
        }
        
    }
    echo "<br>";
}


echo "<br>";

for ($i=0; $i < 5; $i++) { 

    for ($j=0; $j < 5-$i ; $j++) { 
        
            echo " * ";
       
    }
    echo "<br>";
}

?>

