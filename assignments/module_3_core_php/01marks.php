<?php

$phy=60;
$math=50;
$chem=70;
$bio=40;
$com=80;
$grade = null; 

$total = $phy + $math + $com + $chem + $bio;

$percentage = $total / 5;

if ($percentage>=35 && $percentage<50) {

    $grade = "EE";
}
elseif($percentage>=50 && $percentage<60){

    $grade = "DD";
}
elseif($percentage>=60 && $percentage<70){

    $grade = "CC";
}
elseif($percentage>=70 && $percentage<80){

    $grade = "BB";
}
elseif($percentage>=80 && $percentage<90){

    $grade = "AA";
}
elseif($percentage>=90 && $percentage<100){

    $grade = "A++";
}
else {
    $grade = "FF";
}

echo "Total marks : $total <br>";
echo "Percentage : $percentage <br>";
echo "Grade : $grade";



?>