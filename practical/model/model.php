<?php 

class model{
    public $conection = "";
    public function __construct() {
    
        $this->conection =new mysqli("localhost","root","","practical");
    }

    public function insert($tbl,$data)
    {
        $a = array_slice($data,-2,1);
        unset($data['hobbies']);
        $arrkey = implode(",",array_keys($data));
        $arrvalue = implode("','",$data);
        $hobbievalue = implode(",",$a['hobbies']);

        $sql = "INSERT INTO $tbl($arrkey,hobbies)VALUES('$arrvalue','$hobbievalue')";

        // echo "<br>".$sql;

        $SQLEx = $this->conection->query($sql);

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

        // echo $hobbievalue;
        // echo "<br>";
        // echo $arrkey;
        // echo "<br>".$arrvalue;
        // echo "<pre>";
        // print_r($data);
        // echo "<br>";
        // print_r($a);
    }

    public function login($email,$pass){

        $sql ="SELECT * FROM user WHERE email='$email' AND password='$pass' ";
        echo $sql;
        $SQLEx = $this->conection->query($sql); 

        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
            
                $sqlfetchdata[]= $SQLExFetch;
            }
            // $SQLExFetch = $SQLEx->fetch_object(); // return object;
            echo "<pre>";
            print_r($sqlfetchdata);
            echo "</pre>";

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
};

?>