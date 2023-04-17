<div class="container ">
    <div class="row mt-5">
        <div class="offset-3 col-md-6 mt-3">
            <div class="card">
                <form method="post" action="">
                <div class="card-header">REGISTRATION FORM</div>
                <div class="card-body">
                        <div class="row mt-2">
                            <div class="col">
                                <label>First name : </label>
                                <input type="text" class="form-control" name="firstname" id="firstname">
                            </div>
                            <div class="col">
                                <label>Last name : </label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Email : </label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Gender : </label>
                                <input type="radio" name="gender" id="gender" value="male">Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Hobbies : </label>
                                <input type="checkbox" name="hobbies[]" id="hobbies[]" value="H1">H1
                                <input type="checkbox" name="hobbies[]" id="hobbies[]" value="H2">H2
                                <input type="checkbox" name="hobbies[]" id="hobbies[]" value="H3">H3
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Password : </label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Confirm Password : </label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" name="reg" id="reg" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>