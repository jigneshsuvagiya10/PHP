//Silence out Lisence
<?php
echo "<br>";
$str = "Silence";
$s_arry = str_split($str);
// $s_arry = str_split($str,3);
// $s_arry[0]=strrev($s_arry[0]);
$a = $s_arry[0];
$s_arry[0] = strtoupper($s_arry[2]);
$s_arry[2] = strtolower($a);

$str = implode($s_arry);
print_r($s_arry);
echo "<br>Out Put :" . $str;
echo "<br><br>";

?>

=>missmissmissmi out:m=4 ,i=4 ,s=6
<?php echo "<br><br>";

$str = "missmissmissmi";
$c_count = array();
$l = strlen($str);

for ($i = 0; $i < $l; $i++) {
    $ch = $str[$i];

    if (isset($c_count[$ch])) {
        $c_count[$ch]++;
    } else {
        $c_count[$ch] = 1;
    }
}

foreach ($c_count as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
echo "<br><br>";; ?>



=>[10,5,47,3,43,6,5] out:[10,5,47,3,43,6] remove same

<?php
echo "<br><br>";

$arr = [10, 5, 47, 3, 43, 6, 5];
$u_arr = [];

foreach ($arr as $value) {
    if (!in_array($value, $u_arr)) {
        $u_arr[] = $value;
    }
}
print_r($u_arr);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        FORM
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-mt-">
                                <label for="">NAME:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <label for="">NAME:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <label for="">NAME:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                    </div>
                        <div class="card-footer">
                            SUBMIT
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>