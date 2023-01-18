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
        echo $sql;
        // $SQLEx=$this->connection->query($sql);
        
        // if ($SQLEx > 0) {
        //     $ResponseData['Code']="1";
        //     $ResponseData['Msg']="Success";
        //     $ResponseData['Data']="1";
        // }else{
        //     $ResponseData['Code']="0";
        //     $ResponseData['Msg']="Error while inserting";
        //     $ResponseData['Data']="0";
        // }
        // return $ResponseData;
    }
}

?>