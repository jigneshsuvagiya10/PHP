@extends('layouts.appadmin')

@section('content')

<div class="row mt-5">
    <div class="col mt-5">
        <div class="card">
            <div class="card-header">Add & Edit Customer Details</div>
            <div class="card-body">
                <form method="post" id="customerform" onsubmit="event.preventDefault(); addcustomer();">
                    <div class="row">
                        <div class="col-3 mt-3">
                            <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="text" class="form-control" placeholder="Company" name="company" id="company">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="number" class="form-control" placeholder="Mobile" name="mobile" id="mobile">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        </div>
                        <div class="col-3 mt-3">
                            <img src="" alt="" width="50" id="logoimg">
                            <input type="hidden" name="logo_old" id="logo_old" >
                            <input type="file" name="logo" id="logo" placeholder="image" accept="image/*">
                        </div>
                        <div class="col-3 mt-3">
                            <input type="text" class="form-control" placeholder="Tags" name="tags" id="tags">
                        </div>
                        <div class="col-2 mt-3">
                            <input type="submit" class="btn btn-primary" value="Save" name="save" id="save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col mt-5">
        <div class="card">
            <div class="card-header">
                Customer data
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Logo</th>
                            <th>Tags</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="customer_data">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<script>
    var path = '<?php echo asset("images") ?>' ;

    function customerdata() {
        fetch("http://localhost:8000/api/customerdata")
            .then((response) => response.json())
            .then((res) => {
                // console.log(res); 
                htmltbldata = ""
                res.forEach(data => {
                    htmltbldata += `<tr>
                                    <td>${data.firstname}</td>
                                    <td>${data.lastname}</td>
                                    <td>${data.company}</td>
                                    <td>${data.email}</td>
                                    <td>${data.mobile}</td>
                                    <td><img src="${path+'/'+data.logo}" width="50"></td>
                                    <td>${data.tags}</td>
                                    <td>
                                    <button onclick="editcus(${data.id})">edit</button>
                                    <button onclick="deletecus(${data.id})">delete</button>
                                    </td>
                                    </tr>`
                });
                document.getElementById("customer_data").innerHTML = htmltbldata
            });
    }


    function deletecus(pid) {
        fetch("http://localhost:8000/api/deletecustomer/" + pid)
            .then((response) => response.json())
            .then((res) => {});
        customerdata();
    }


    function addcustomer() {
        console.log('hardik');
        var formData = $(this).serializeArray();
        const form = document.querySelector('#customerform');
        const fdata = new FormData(form);
        if($('#logo').prop("files")){
            // console.log('hiiiiiiiiiiiiiiiii');
            var file_data = $('#logo').prop('files')[0];
            fdata.append('file', file_data);
        }
        fetch("http://localhost:8000/api/insert", {
            method: "POST",
            body: fdata
        }).then(response => response.json()).then((res) => {
            console.log(res);
        })
        document.getElementById("customerform").reset();
        customerdata();
    }

    function editcus(pid) {
        var path = '<?php echo asset("images") ?>' ;
        // console.log(pid);
        // fetch(`http://localhost:8000/api/productdatabyid/${pid}`)
        // $('#exampleModalLong').modal('show');
        fetch("http://localhost:8000/api/customerbyid/" + pid)
            .then((response) => response.json())
            .then((res) => {
                console.log(res); 
                // jQuery('#exampleModalLong').modal('show');
                document.getElementById("firstname").value = res.firstname
                document.getElementById("lastname").value = res.lastname
                document.getElementById("company").value = res.company
                document.getElementById("email").value = res.email
                document.getElementById("mobile").value = res.mobile
                document.getElementById("password").value = res.password

                document.getElementById("logoimg").src =  path+'/'+res.logo
                // document.getElementById("logo").value =  res.logo
                document.getElementById("tags").value = res.tags
                document.getElementById("customerform").setAttribute("onsubmit", "event.preventDefault(); updatecustomer(" + pid + ")");
                // document.getElementById("exampleModalLong").style.visibility = ""; 
            });
    }

    function updatecustomer(pid) {
        var formData = $(this).serializeArray();
        const form = document.querySelector('#customerform');
        const fdata = new FormData(form);
        // console.log(fdata);
        var file_data = $('#logo').prop('files')[0];
        // console.log(file_data);
        fdata.append('file', file_data);
        fetch("http://localhost:8000/api/updatecustom/"+pid, {
            method: "POST",
            body: fdata
        }).then(response => response.json()).then((res) => {
            console.log(res);
        })
        document.getElementById("customerform").reset();
        document.getElementById("logoimg").src = "";

        customerdata();
    }

    customerdata();
    
</script>
@endsection