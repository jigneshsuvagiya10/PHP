<?php 

class reg {

    public function __construct()
    {
        echo "Welcome<br>";
    }

     public function __destruct()
     {
        echo "Thank You ";
     }

     public function name()
     {
        echo "Enter Name<br>";
     }
     public function email()
     {
        echo "Enter email<br>";
     }
     public function mobile()
     {
        echo "Enter mobile<br>";
     }
}

$robj = new reg;

$robj->name();
$robj->email();
$robj->mobile();

?>

<!-- 
<p>constructor is a method wich is invoked by default when objects are created</p>
<p>constructor never return</p>
<p>constructor use for init some values</p> -->