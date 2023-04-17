@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-4 offset-4 mt-4">
        <div class="card">
            <form method="post" id="editform"  enctype="multipart/form-data">
                @csrf
                <div class="card-header">Edit Customer
                </div>
                <div class="card-body">
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
                        <label for="my-input">Logo</label>
                        <input type="file" name="logo" id="logo">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Tags</label>
                        <input id="tags[]" class="form-control" type="text" name="tags" multiple>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="update" id="update" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script >
    $('form#editform').submit(function(event){
        event.preventDefault();
        var formData=$(this).serializeArray();
        const form = document.querySelector('#editform');
        const fdata = new FormData(form);
        var file_data = $('#logo').prop('files')[0];   
        // console.log(file_data);
        fdata.append('file', file_data);    
        fetch("http://localhost:8000/api/update", {method: "POST", body: fdata}).then(response=>response.json()).then((res)=>{
            console.log(res);
        })
        document.getElementById("regform").reset();
    })

</script>

@endsection