<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <script src=https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js></script>
</head>
<body>
    
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="features.php">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Pricing.php">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <div class="dropdown-divider"></div>
            <?php if (isset($_SESSION['userdata'])) {?>
              <a class="dropdown-item" href="logout.php">logout</a>
              <?php } else {?>
                <a class="dropdown-item" href="login.php">login</a>
            <?php } ?>
          </div>
        </li>
        <?php if (isset($_SESSION['userdata'])) { ?>
                        <li class="nav-item dropdown">
                            <label class="nav-link" for=""><?php echo $_SESSION['userdata']['username']; ?></label>
                        </li>
                    <?php } ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>
</body>
</html>