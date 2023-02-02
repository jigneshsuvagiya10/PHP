<?php 

class model {
    public $connection="";
    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "institute");
    }

    public function insert($tbl,$data)
    {
        $arrkey = implode(",", array_keys($data));
        $arrvalue = implode("','", $data);
        
        $sql = "INSERT INTO $tbl ($arrkey) VALUE ('$arrvalue')";
        // echo $sql;
        $SQLEx=$this->connection->query($sql);
        
        if ($SQLEx > 0) {
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']=$data;
        }else{
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        return $ResponseData;
    }

    public function login($username,$password){
        $SQL="SELECT * FROM users WHERE user_password='$password' AND ( user_name='$username' OR user_email='$username' OR user_mobile_no='$username')";
        $SQLEx=$this->connection->query($SQL);
        //print_r($SQL);
        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
                $SqlFetchData[]=$SQLExFetch;
            }
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']=$SqlFetchData;
        }
        else {    
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        
        return $ResponseData;

    }

    public function delete($tbl,$where=""){
        $sql = " DELETE FROM $tbl ";
        if ($where != "") {
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                $sql .= " $key = '$value' AND";
            }
            $sql = rtrim($sql, "AND");
        }
        // echo $sql;
        // echo $sql;
        $SQLEx = $this->connection->query($sql);
        // echo $SQLEx;

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
    }

    public function select($tbl,$where=""){

        $sql ="SELECT * FROM $tbl ";
        if ($where != "") {
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                $sql .= " $key = '$value' AND";
            }
            $sql = rtrim($sql, "AND");
        }
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
}

?>