<?php

// $_ENV = getenv();
 //$data = getenv();
 //print_r($_ENV);
 //print_r($_SERVER);
// var_dump($_SERVER);
 //var_export($_SERVER);

 $arr = [123,12.2,true,'A',"abc"];
 echo"<pre>";
 echo"<br>---------- print_r ----------<br>";
print_r($arr);
 echo"<br>---------- var_dump ----------<br>";
var_dump($arr);
 echo"<br>---------- var_export ----------<br>";
 var_export($arr)
 ?>