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

                    <div class="card-body">
                        <h5 class="card-title"> User data </h5>
                        <div class="d-flex align-items-center">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="username" id="username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="radio" name="male" id="male" value="Male"><label for="male">Male</label>
                                    <input type="radio" name="female" id="female" value="Female"><label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            < </div>
    </section>
    <script>
        let params = new URLSearchParams(location.search);
        let no = params.get('user_id')
        // console.log(id);
        function edituser(params) {
            fetch("http://localhost/php/tmsProject/API/edituser?user_id=" + no).then(res => res.json()).then(result => {
                console.log(result);
                document.getElementById("username").value = result.data[0].user_name
                document.getElementById("email").value = result.data[0].user_email

                if (result.data[0].user_gender == "Male") {
                    radiobtnmale = document.getElementById("male")
                    radiobtnmale.checked = true;
                } else {
                    radiobtnmale = document.getElementById("female")
                    radiobtnmale.checked = true;
                }
            })
        }
        edituser()
    </script>
</main><!-- End #main -->