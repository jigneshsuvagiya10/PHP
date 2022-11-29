<?php

//indexed array

$arr=["hello","1","true",'A'];


for ($i=0; $i < sizeof($arr) ; $i++) { 

    echo $arr[$i] ;
    echo"<br>";
    
}
echo"<br>";

foreach ($arr as $key => $value) {
    echo $value;
    echo"<br>";
}
echo"<br>";

//associative array

$arrr=array("peater"=>"30","ben"=>"23","tom"=>"20");

//or $arrr["peater"]="30";
//or $arrr["ben"]="23";
//or $arrr["tom"]="20";

foreach ($arrr as $key => $value) {
    
    echo "$key => $value";
    echo"<br>";
}

//multidimensional array

$ar=array("10th"=>array("students"=>array("jay" => array("maths"=>"30","eng"=>"32","com"=>"35" ),
                            "ben" => array("maths"=>"31","eng"=>"33","com"=>"30" ),
                            "tom" => array("maths"=>"21","eng"=>"23","com"=>"20" )))
        ,"11th"=>array("students"=>array("max" => array("maths"=>"55","eng"=>"52","com"=>"65" ),
                            "ary" => array("maths"=>"71","eng"=>"73","com"=>"70" ),
                            "jek" => array("maths"=>"81","eng"=>"83","com"=>"80" )))
                        );


echo "<pre>";
print_r($ar);

?>