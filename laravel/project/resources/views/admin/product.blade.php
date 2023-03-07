@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">product</div>
                <div class="card-body">
                    <form method="post" id="prodform" onsubmit="event.preventDefault(); saveprod();">
                        <div class="row">
                            <div class="col-3 mt-3">
                                <input type="text" class="form-control" placeholder="Enter Title" name="product_title" id="product_title">
                            </div>
                            <div class="col-3 mt-3">
                                <input type="text" class="form-control" placeholder="Enter Description" name="product_description" id="product_description">
                            </div>
                            <div class="col-2 mt-3">
                                <input type="number" class="form-control" placeholder="Enter Quantity" name="product_quantity" id="product_quantity">
                            </div>
                            <div class="col-2 mt-3">
                                <input type="number" class="form-control" placeholder="Enter Price" name="product_price" id="product_price">
                            </div>
                            <div class="col-2 mt-3">
                                <input type="submit" class="btn btn-primary" name="save" id="save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="card">
                <div class="card-header">{{ __('All Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="prod_data">

                        </tbody>
                    </table>

                    <script>
                        function getdata() {
                            fetch("http://localhost:8000/api/allproduct")
                                .then((response) => response.json())
                                .then((res) => {
                                    // console.log(res); 
                                    htmltbldata = ""
                                    res.forEach(data => {
                                        htmltbldata += `<tr>
                                    <td>${data.product_title}</td>
                                    <td>${data.product_description}</td>
                                    <td>${data.product_quantity}</td>
                                    <td>${data.product_price}</td>
                                    <td>
                                    <button onclick="editpro(${data.id})">edit</button>
                                    <button onclick="deletepro(${data.id})">delete</button>
                                    </td>
                                    </tr>`
                                    });
                                    document.getElementById("prod_data").innerHTML = htmltbldata
                                });
                        }

                        function editpro(pid) {
                            // console.log(pid);
                            // fetch(`http://localhost:8000/api/productdatabyid/${pid}`)
                            fetch("http://localhost:8000/api/productdatabyid/"+pid)
                                .then((response) => response.json())
                                .then((res) => {
                                    // console.log(res); 
                                    document.getElementById("product_title").value = res.product_title
                                    document.getElementById("product_description").value = res.product_description
                                    document.getElementById("product_quantity").value = res.product_quantity
                                    document.getElementById("product_price").value = res.product_price

                                    document.getElementById("prodform").setAttribute("onsubmit", "event.preventDefault(); updatep("+pid+")");
                                });
                        }
                        function deletepro(pid) {
                            // console.log(pid);
                            // fetch(`http://localhost:8000/api/productdatabyid/${pid}`)
                            fetch("http://localhost:8000/api/deleteprobyid/"+pid)
                                .then((response) => response.json())
                                .then((res) => {
                                });
                                getdata();
                        }

                        function saveprod() {
                            // console.log("callde");
                            // console.log($('#prodform').serializeArray());
                            var result = {}
                            $.each($('#prodform').serializeArray(), function() {
                                result[this.name] = this.value;
                            });
                            console.log(result);
                            fetch("http://localhost:8000/api/insert", {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(result)
                                })
                                .then((response) => response.json())
                                .then((res) => {
                                    // console.log(res);
                                });
                                document.getElementById("prodform").reset();
                                getdata();
                        }
                        function updatep(pid) {
                            // console.log("callde");
                            // console.log($('#prodform').serializeArray());
                            var result = {}
                            $.each($('#prodform').serializeArray(), function() {
                                result[this.name] = this.value;
                            });
                            console.log(result);
                            fetch("http://localhost:8000/api/updatepro/"+pid, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(result)
                                })
                                .then((response) => response.json())
                                .then((res) => {
                                    // console.log(res);
                                });
                                document.getElementById("prodform").reset();
                                getdata();
                        }
                        getdata();
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection