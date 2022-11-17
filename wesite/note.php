<?php include_once "hedder.php";?>



<div class="containar">
    <div class="row">
        <div class="col-md-4 offset-4 mt-5">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h5> Add Note</h5>
                </div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>

        <form method="post">
        <div class="containar">
            <div class="mt-3 col text-center" >
            <input class = "btn btn-info" type="submit" value="add note" name="note"> 
        </div>
        </div>
        </<form>