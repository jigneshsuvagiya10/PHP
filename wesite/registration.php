<?php include_once"hedder.php"

// if (isset($_POST['reg'])) {
//     $_SESSION['userdata']=["name"=>$_POST["name"],"email"=>$_POST["email"],"userid"=>$_POST["userid"],"password"=>$_POST["password"]];
// }

?>

<div class="containar">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card border-primary">
            <div class="card-header text-center "><h5>Registration form</h5></div>
            <div class="card-body">
                <form method="post">
                    <div class="row ">
                        <div class="col">
                            <label for="inputname" ><h6>Name</h6></label>
                            <input type="text" class="form-control" placeholder="firstname lastname" name="name" id="name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="inputemil" ><h6>Email</h6></label>
                            <input type="email" class="form-control" placeholder="email@mail.com" name="email" id="email">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="inputuserid" ><h6>Userid</h6></label>
                            <input type="text" class="form-control" placeholder="userid" name="userid" id="userid">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="inputuserid" ><h6>Password</h6></label>
                            <input type="password" class="form-control" placeholder="password" name="password" id="password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="submit" name="reg" id="reg">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>