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
}

?>