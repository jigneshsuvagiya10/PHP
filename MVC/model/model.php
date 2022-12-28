<?php
mysqli_report(MYSQLI_REPORT_ALL) ;//used for version php 7
date_default_timezone_set('Asia/Kolkata');    //to set to current location time

// error_reporting(0);
// mysqli_report();
class model{

    public $connection = "";
    public function __construct() {

        // echo "called model";

        try {
            $this->connection = new mysqli("localhost", "root", "", "test");
            // echo "<br> called try<br>";
            
        } catch (Exception $e) {
            // echo "<pre>";
            // print_r($e->getMessage());
            // echo "</pre>";
            $errormsg = PHP_EOL. "Error msg       >>" .$e->getMessage();
            $errormsg .= PHP_EOL."Error Date&Time >>".date('d-m-Y H:i:s A').PHP_EOL;
            echo "<h2>$errormsg</h2>";
            // echo "<br> called catch<br>";

            if (!file_exists("log")) {
                mkdir("log");
            }
            file_put_contents("log/".date('d-m-Y')."Eror.txt","$errormsg",FILE_APPEND);
        }
        // echo "<pre>";
        // print_r($connection);
        // echo "</pre>";
    }

    public function select(){}
    public function insert($tbl,$data){

        $arrkey = implode(",",array_keys($data));
        $arrvalue = implode("','",$data);
        $sql = "INSERT INTO $tbl($arrkey)VALUES('$arrvalue')";

        $SQLEx = $this->connection->query($sql);

        if ($SQLEx > 0) {
            $responsedata['code'] = "1";
            $responsedata['msg'] = "SUCCSESS";
            $responsedata['data'] = "1";
        } else {
            $responsedata['code'] = "0";
            $responsedata['msg'] = "ERROR WHILE INSERTING";
            $responsedata['data'] = "0";
        }

        return $responsedata;
        

        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";
    }
    public function update(){}
    public function delete(){}
}

?>