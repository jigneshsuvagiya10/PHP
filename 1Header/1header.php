<?php

if (isset($_POST["header_redirection"])) {

    header("location:otherpage.php");
}

if (isset($_POST['header_download'])) {


    $size = filesize("Image.jpg");

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="Image.jpg"');
    header('Content-Length: ' . $size);
    readfile("Image.jpg");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>

<body>
    <h2>Header</h2>
    <ul <li>header() will helps to redirect, modified HTTP header, file download </li>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col ">
                <form method="post">
                    <input type="submit" class="btn btn-primary" name="header_redirection" value="redirect to other page">
                    <input type="submit" class="btn btn-info" name="header_download" value="Download">
                </form>
            </div>
        </div>
    </div>

</body>

</html>