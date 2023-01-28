<main id="main" class="main">

    <div class="pagetitle">
        <h1>Admin Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">JEE</a></li>
                            <li><a class="dropdown-item" href="#">NEET</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">All Users </h5>
                        <div class="d-flex align-items-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>User Nmae</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="dispdata"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            < </div>
    </section>
    <script>
        function deletedata(no) {
            fetch("http://localhost/php/API/deleteuser?no="+no).then((res) => res.json()).then((result) => {
                // console.log(result);
                userdata()
            }) 
        }
        
        function userdata() {
            fetch("http://localhost/php/API/alluser").then(res => res.json()).then(result => {
                // console.log(result.data);
                htmltbl = '';
                count=1
                result.data.forEach(element => {
                    // console.log(element);
                    htmltbl += `<tr>
                                    <td>${count}</td>
                                    <td>${element.name}</td>
                                    <td>${element.email}</td>
                                    <td>${element.mobile}</td>
                                    <td><button onclick=deletedata(${element.no})>delete</button></td>
                                </tr>`
                    count++;
                });
                document.getElementById("dispdata").innerHTML=htmltbl
                // console.log(htmltbl);
            })
        }
        userdata()
    </script>

</main><!-- End #main -->