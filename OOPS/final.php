<?php 

final class finalcl{

    public function FunctionName()
    {
        echo "final class";
    }
}

// class OtherClass extends finalcl{ //Class OtherClass cannot extend final class FinalClassExample in
//     public function FunctionName()
//     {
//         echo "Called";
//     }
// }

$fi = new finalcl;

$fi->FunctionName();

?>