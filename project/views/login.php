<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4 mt-5">
      <div class="card border-primary ">
        <div class="card-header text-center"> For Login</div>
        <div class="card-body">
          <form method="post" id="loginform">
            <div class="row mt-3">
              <div class="col ">
                <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col text-center">
                <input type="submit" value="Login" onclick="logindata()" class=" btn btn-primary " name="login" id="login">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col text-center">
                <a href="registration" class="text">Registration now</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function logindata() {
    event.preventDefault();

    let logform = $('#loginform').serializeArray();
    // console.log(logform);
    
    var str = {};
    $.each(logform,function() {
      str[this.name]=this.value;    
      // console.log(str);
    });
    let header_for_post = {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      body: JSON.stringify(str) // body data type must match "Content-Type" header
    }
    // console.log(header_for_post);

    
         fetch("http://localhost/php/API/login", header_for_post).then(response => response.json()).then((res) => {
             console.log(res);
            //data=  $.parseJSON(res)
            //console.log(res.getValue(Code));
         })

  }

  $().ready(function() {
    // validate the comment form when it is submitted
    // $("#commentForm").validate();
    $("#loginform").validate({
      rules: {
        name: {
          required: true,
          minlength: 2
        },
        password: {
          required: true,
          minlength: 2
        },
      },
      messages: {
        name: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
      }
    })
  })
</script>