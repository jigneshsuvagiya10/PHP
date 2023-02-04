<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Edit Profile</h1>
            </div>
            <div class="col-6">
                <a href="home"><h5>GO TO HOME PAGE</h5></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 personal-info">
                <h3>Personal info</h3>

                <form class="form-horizontal" id="edituserpro" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">User Id:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="number" name="user_id" id="user_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">User Name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="user_name" id="user_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="email" name="user_email" id="user_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Mobile No:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="number" name="user_mobile_no" id="user_mobile_no">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Gender:</label>
                        <div class="col-md-8">
                            <input type="radio" name="user_gender" id="male" value="Male"><label for="male">Male</label>
                            <input type="radio" name="user_gender" id="female" value="Female"><label for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Course:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="user_course" id="user_course">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Class:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="user_class" id="user_class">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="button" onclick="updatedata()" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" onclick="userprofile()" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
    <hr>
</body>

</html>


<script>
    function updatedata() {
        event.preventDefault();
        let FormData = $("#edituserpro").serializeArray();
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
    // let no = document.cookie.value
    // console.log(no);
    function userprofile() {
        fetch("http://localhost/php/tmsProject/API/userprofile").then(res => res.json()).then(result => {
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
    userprofile()
</script>