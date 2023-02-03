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
                        <form name="userdataform" id="userdataform" method="post">
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="number" name="user_id" id="user_id">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="text" name="user_name" id="user_name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="email" name="user_email" id="user_email">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="number" name="user_mobile_no" id="user_mobile_no">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input type="radio" name="user_gender" id="male" value="Male"><label for="male">Male</label>
                                    <input type="radio" name="user_gender" id="female" value="Female"><label for="female">Female</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="text" name="user_course" id="user_course">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input class="form-control" type="text" name="user_class" id="user_class">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <input type="submit" onclick="updatedata()" name="update" id="update" value="Update">
                                </div>
                            </div>
                            </form>
                    </div>
                </div>

            </div>
            < </div>
    </section>
    <script>

        function updatedata(){
            event.preventDefault();     
        let FormData = $("#userdataform").serializeArray() ;  
        // console.log(FormData);
        var result = {};
        $.each(FormData, function() {
            result[this.name] = this.value;   
        });
        // console.log(result);
        let header_for_post = {
            method: 'POST', 
            body: JSON.stringify(result) 
        }
        //console.log(header_for_post);
         fetch("http://localhost/php/tmsProject/API/updateuser", header_for_post).then(response => response.json()).then((res) => {
            console.log(res);
         });
        }

        let params = new URLSearchParams(location.search);
        let no = params.get('user_id')
        // console.log(id);
        function edituser(params) {
            fetch("http://localhost/php/tmsProject/API/edituser?user_id=" + no).then(res => res.json()).then(result => {
                // console.log(result);
                document.getElementById("user_id").value = result.data[0].user_id
                document.getElementById("user_name").value = result.data[0].user_name
                document.getElementById("user_email").value = result.data[0].user_email
                document.getElementById("user_mobile_no").value = result.data[0].user_mobile_no
                
                if (result.data[0].user_gender == "Male") {
                    radiobtnmale = document.getElementById("male")
                    radiobtnmale.checked = true;
                } else {
                    radiobtnmale = document.getElementById("female")
                    radiobtnmale.checked = true;
                }
                document.getElementById("user_course").value = result.data[0].user_course
                document.getElementById("user_class").value = result.data[0].user_class
            })
        }
        edituser()
    </script>
</main><!-- End #main -->