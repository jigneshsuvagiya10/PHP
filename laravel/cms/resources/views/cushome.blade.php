@extends('layouts.app')

@section('content')

<h1>Customer home page</h1>

<div class="row">
    <div class="col-lg-6 offset-3 mt-5">
        <div class="card">
            <form method="post" id="regform" enctype="multipart/form-data">
                @csrf
                <div class="card-header">Your info
                </div>
                <div class="card-body">
                <div class="form-group">
                        <label for="my-input">Logo : </label>
                        <img src="" alt="" width="70" id="logoimg">
                    </div>
                    <div class="form-group">
                        <label for="my-input">First Name</label>
                        <input id="firstname" class="form-control" type="text" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Last Name</label>
                        <input id="lastname" class="form-control" type="text" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Company</label>
                        <input id="company" class="form-control" type="text" name="company">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Mobile</label>
                        <input id="mobile" class="form-control" type="number" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Tags</label>
                        <input id="tags" class="form-control" type="text" name="tags">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var path = '<?php echo asset("images") ?>' 

    fetch("http://localhost:8000/api/customerbyid/" + <?php session_start(); echo $_SESSION['user']->id?>)
            .then((response) => response.json())
            .then((res) => {
                console.log(res); 
                document.getElementById("firstname").value = res.firstname
                document.getElementById("lastname").value = res.lastname
                document.getElementById("company").value = res.company
                document.getElementById("email").value = res.email
                document.getElementById("mobile").value = res.mobile
                document.getElementById("password").value = res.password
                document.getElementById("logoimg").src =  path+'/'+res.logo
                document.getElementById("tags").value = res.tags
            });
</script>

@endsection