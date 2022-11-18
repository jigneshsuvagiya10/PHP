<?php include_once "hedder.php";

if (isset($_REQUEST['emptycart'])) {
    unset($_SESSION['cart']);
}
if (isset($_REQUEST['emptynote'])) {
    unset($_SESSION['noteitem']);
}
?>


<form method="post">
<div class="containar">
    <div class="row md-6">
    <div class="mt-3 col text-center" >
    <input class = "btn btn-danger" type="submit" value="empty cart" name="emptycart">
  
    </div>
    <div class="mt-3 col text-center" >
    <input class = "btn btn-danger" type="submit" value="empty note" name="emptynote">
 
    </div>
    </div>
</div>
</form>

<div class="containar">
    <div class="row md-6">
    <div class="col mt-3">
    <?php
    echo "<pre>";

    if (isset($_SESSION['cart'])) {
        
        print_r($_SESSION['cart']);
    }
    ?>
    </div>
    <div class="col mt-3">
    <?php
    echo "<pre>";

    if (isset($_SESSION['noteitem'])) {
        
        print_r($_SESSION['noteitem']);
    }
    ?>
    </div>
    </div>
</div>


