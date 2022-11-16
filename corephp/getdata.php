<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" name="btn" id="btn">
    </form>

    <p>-------------------------------------------</p>

    <form method="post">
        <input type="text" name="data" id="data">
        <input type="password" name="password" id="password">
        <input type="submit" name="btn-post" id="btn-post">
    </form>
    
</body>
</html>

<?php

echo "<pre>";
echo"<br>========== GET ==========<br>";
print_r($_GET);
echo"<br>========== POST ==========<br>";
print_r($_POST);
echo "<br>============ REQUEST ===============<br>";
print_r($_REQUEST);
echo "<br>============ GLOBALS ===============<br>";
print_r($GLOBALS);
echo "</pre>";

?>