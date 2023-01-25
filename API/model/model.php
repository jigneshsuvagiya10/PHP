<?php
// mysqli_report(MYSQLI_REPORT_ALL) ;//used for version php 7
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

    public function login($uname,$pass){

        $sql ="SELECT * FROM user WHERE  (name='$uname' OR email='$uname' OR mobile='$uname') AND password='$pass' ";
        // echo $sql;
        $SQLEx = $this->connection->query($sql); 

        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
            
                $sqlfetchdata[]= $SQLExFetch;
            }
            // $SQLExFetch = $SQLEx->fetch_object(); // return object;
    
            // echo "<pre>";
            // print_r($sqlfetchdata);
            // echo "</pre>";
            $responsedata['code'] = "1";
            $responsedata['msg'] = "SUCCSESS";
            $responsedata['data'] = $sqlfetchdata;
        } else {
            $responsedata['code'] = "0";
            $responsedata['msg'] = "NO DATA FOUND";
            $responsedata['data'] = "0";
        }
        
        return $responsedata;
    }
    public function select($tbl){

        $sql ="SELECT * FROM $tbl ";
        $SQLEx = $this->connection->query($sql); 

        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
            
                $sqlfetchdata[]= $SQLExFetch;
            }
            $responsedata['code'] = "1";
            $responsedata['msg'] = "SUCCSESS";
            $responsedata['data'] = $sqlfetchdata;
        } else {
            $responsedata['code'] = "0";
            $responsedata['msg'] = "ERROR WHILE INSERTING";
            $responsedata['data'] = "0";
        }
        
        return $responsedata;
    }
    public function insert($tbl,$data){

        $arrkey = implode(",",array_keys($data));
        $arrvalue = implode("','",$data);
        $sql = "INSERT INTO $tbl($arrkey)VALUES('$arrvalue')";

        $SQLEx = $this->connection->query($sql);

        if ($SQLEx > 0) {
            $responsedata['code'] = "1";
            $responsedata['msg'] = "SUCCSESS";
            $responsedata['data'] = $data;
        } else {
            $responsedata['code'] = "0";
            $responsedata['msg'] = "ERROR WHILE INSERTING";
            $responsedata['data'] = "0";
        }

        // echo "<pre>";
        // print_r($sql);
        // echo "</pre>";

        return $responsedata;
    }
    public function update(){}
    public function delete(){}
}

?>