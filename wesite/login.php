<?php 
include 'hedder.php';

if(isset($_POST['login'])){
    if ($_POST['username']=="TOPS" && $_POST['password']=="123") {
      
      $_SESSION['userdata']=array("username"=>"tops","location"=>"SG");

      setcookie("userid" ,"TOPS",time() +3600);

        header("location:dashbord.php");
    }
    else {
        echo "<script>alert('Invalid')</script>";
    }
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
        <div class="card border-primary " >
                <div class="card-header text-center" > For Login</div>
                <div class="card-body">
    <form method="post">
        <div class="row mt-3">
            <div class="col ">
                <input type="text" class="form-control" placeholder="Enter user name" name="username" id="username">
                
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
                
            </div>
        </div>
         <div class="row mt-3">
            <div class="col text-center">
                <input type="submit" value="Login" class=" btn btn-primary " name="login" id="login">
            </div>
        </div>
         <div class="row mt-2">
            <div class="col text-center">
                  <a href="registration.php" class="text">Registration now</a>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
</div>
  