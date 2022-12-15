<?php 

class mrg {

    public $food = "f00d";

    public function mahendi(){

        echo " mahendi call<br>" .$this->food;;
    }

    public function garba(){

        echo " garba call";
    }

    public function dj(){

        echo " dj call";
    }
    
}

$boysmrg = new mrg;
$girlsmrg = new mrg;

$boysmrg->dj();
echo "<br>";
echo $boysmrg->food;
echo "<br>";

$girlsmrg->mahendi();


?>
<p>datamember is a variable which is use for entire class</p>