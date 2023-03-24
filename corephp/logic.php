//Silence out Lisence
<?php
echo"<br>";
$str = "Silence";
$s_arry = str_split($str);
// $s_arry = str_split($str,3);
// $s_arry[0]=strrev($s_arry[0]);
$a=$s_arry[0];
$s_arry[0]=strtoupper($s_arry[2]);
$s_arry[2]=strtolower($a);

$str=implode($s_arry);
print_r($s_arry);
echo "<br>Out Put :".$str;
echo"<br><br>";

?>

=>missmissmissmi out:m=4 ,i=4 ,s=6
<?php echo"<br><br>";

$str="missmissmissmi";
$c_count=array();
$l=strlen($str);

for ($i=0; $i < $l ; $i++) { 
    $ch = $str[$i];
    
    if (isset($c_count[$ch])) {
        $c_count[$ch]++;
    } else {
        $c_count[$ch]=1;
    }
}

foreach ($c_count as $key => $value) {
    echo $key."=>" .$value."<br>";
}
echo"<br><br>";


;?>



=>[10,5,47,3,43,6,5]  out:[10,5,47,3,43,6] remove same

<?php 
echo"<br><br>";

$arr=[10,5,47,3,43,6,5];
$u_arr=[];

foreach ($arr as $value) {
    if (!in_array($value,$u_arr)) {
        $u_arr[]=$value;
    }
}
print_r($u_arr);

?>