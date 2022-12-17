<?php 

interface tops{

    public function attendans();
    public function assignment();
    public function project();
    
    // public function simle fun())
    // {
        //     echo "not ok";
        
    // }
}

class teacher {

    public function somthing()
    {
        echo "your choice";
    }
}

class student extends teacher implements tops{
    
    public function attendans(){
        echo "Attendans<br>";
    }
    public function assignment(){
        echo "Assignment <br>";
    }
    public function project(){
        echo "Project<br>";
    }

    // $this->somthing();
    
}

$obj=new student;

$obj->attendans();
$obj->assignment();
$obj->project();
$obj->somthing();

?>