
<div class="containar">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <ul id="dispdata">
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script>
    // $.ajax({
    //     url : "http://localhost/php/API/alluser",
    //     success : function (responce){
    //         console.log(responce);

    //         let data = JSON.parse(responce);
    //         console.log(data);
    //         htmlulli='';

    //         data.data.forEach(element => {

    //             htmlulli += "<li>"+element.name+"</li>"
    //             // console.log(element.name);
    //         });
    //         console.log(htmlulli);
    //         $("#dispdata").html(htmlulli)
    //     }
    // })

    fetch("http://localhost/php/API/alluser").then(res=>res.json()).then( (data)=>{

            htmlulli='';
            data.data.forEach(element => {
                htmlulli += "<li>"+element.name+"</li>"
                // console.log(element.name);
            });
            console.log(htmlulli);
            $("#dispdata").html(htmlulli);
    })
</script>
