<style>
    input+span {
        color: red;
    }
</style>
<div class="containar">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card border-primary">
                <div class="card-header text-center ">
                    <h5>Registration form</h5>
                </div>
                <div class="card-body">
                    <!-- <form method="post" onsubmit=""> -->
                    <form method="post" id="regform">
                        <div class="row ">
                            <div class="col">
                                <label for="inputname">
                                    <h6>Name</h6>
                                </label>
                                <input type="text" class="form-control" onblur="check(this)" placeholder="firstname lastname" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputemil">
                                    <h6>Email</h6>
                                </label>
                                <input type="email" class="form-control" placeholder="email@mail.com" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputmobile">
                                    <h6>Mobile</h6>
                                </label>
                                <input type="text" class="form-control" onblur="check(this)" placeholder="XXXXXXXXXX" name="mobile" id="mobile" onkeypress="return (event.which>=48 && event.which<=57) " required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputpassword">
                                    <h6>Password</h6>
                                </label>
                                <input type="password" class="form-control" onblur="check(this)" placeholder="password" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" onclick="registerdata()" class="btn btn-primary" value="submit" name="reg" id="reg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function registerdata() {
        event.preventDefault();
        let formdata = $("#regform").serializeArray();
        console.log(formdata);
        var result = {};
        $.each(formdata, function() {
            result[this.name] = this.value;
        });
        console.log(result);
        let form_post_api = {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(result) // body data type must match "Content-Type" header
        };
        console.log(form_post_api);
        fetch("http://localhost/php/API/registration", 
            form_post_api
        ).then(response => response.json()).then((res) => {
            console.log(res);
        })
    }

    function check(e) {
        const el = e;
        //new element
        const newel = document.createElement("span");
        const newContent = document.createTextNode("This fild is required");
        newel.appendChild(newContent);
        if (el.value == "") {
            console.log(e.nextSibling.nodeName);
            if (e.nextSibling.nodeName == "SPAN") {
                e.nextSibling.remove(newel);
                el.after(newel);
            } else {
                el.after(newel);
            }
        } else {
            e.nextSibling.remove(newel);
        }
    }

    document.getElementById("email").addEventListener("keyup", function() {
        const el = this;
        // console.log(this.value);
        const newel = document.createElement("span");
        const newContent = document.createTextNode("Invalid email formate");
        newel.appendChild(newContent);
        // let pattern = "/^[]+$/"
        let pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        console.log(pattern.test(this.value));
        if (pattern.test(this.value)) {
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove(newel);
            }
        } else {
            if (this.nextSibling.nodeName == "SPAN") {
                this.nextSibling.remove(newel);
                el.after(newel);
            } else {
                el.after(newel);
            }
        }
    })
</script>