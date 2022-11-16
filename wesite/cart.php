<?php include_once "hedder.php";?>


<form method="post">
<div class="containar">
    <div class="mt-3 col text-center" >
    <input class = "btn btn-primary" type="submit" value="empty cart" name="empty">
    
</div>
</div>
</<form>

<?php
if (isset($_REQUEST['empty'])) {
    session_destroy();
}

echo "<pre>";

print_r($_SESSION);
?>
