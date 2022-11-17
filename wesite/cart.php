<?php include_once "hedder.php";?>


<form method="post">
<div class="containar">
    <div class="mt-3 col text-center" >
    <input class = "btn btn-danger" type="submit" value="empty cart" name="empty">
    
</div>
</div>
</<form>

<?php
if (isset($_REQUEST['empty'])) {
    unset($_SESSION['cart']);
}

echo "<pre>";

if (isset($_SESSION['cart'])) {
    
    print_r($_SESSION['cart']);
}
?>
