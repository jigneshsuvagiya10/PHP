<?php include_once "hedder.php";

if (isset($_POST["note"])) {
    $_SESSION['noteitem']=["note1"=>$_POST["note1"],"note2"=>$_POST['note2'],"note3"=>$_POST['note3'],"note4"=>$_POST['note4']];
}

?>

<div class="containar">
    <div class="row">
        <div class="col-md-4 offset-4 mt-5">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h5> Add Note</h5>
                </div>
                <div class="card-body">
                    <form  method="post">
                    <div class="row">
                        <div class="col mt-2">
                            <input class="form-control" placeholder="enter note1" type="text" name="note1" id="note1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <input class="form-control" placeholder="enter note2" type="text" name="note2" id="note2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <input class="form-control" placeholder="enter note3" type="text" name="note3" id="note3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <input class="form-control" placeholder="enter note4" type="text" name="note4" id="note4">
                        </div>
                    </div>
                    <div class="mt-3 col text-center" >
                        <input class = "btn btn-primary" type="submit" value="add note" name="note"> 
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

      