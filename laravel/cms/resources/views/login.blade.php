@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-4 offset-4 mt-4">
        <div class="card">
            <form method="post" action="logindata">
                @csrf
                <div class="card-header">Log in
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row ">
                        <div class="col">
                        <input type="submit" class="btn btn-success" name="login" id="login" value="Submit">
                        </div>
                        <div class="col">
                            <a href="registration">Registre Now</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection