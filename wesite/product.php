<?php include_once"hedder.php";

if (isset($_REQUEST['saveprod1'])) {

    $_SESSION['cart']['prod1']= array("product"=>$_REQUEST["prod1"],"prodprice"=>$_REQUEST["prod1price"]
    ,"prodqunatity" => $_REQUEST["prod1qunatity"]);
}
if (isset($_REQUEST['saveprod2'])) {

    $_SESSION['cart']['prod2']= array("product"=>$_REQUEST["prod2"],"prodprice"=>$_REQUEST["prod2price"]
    ,"prodqunatity" => $_REQUEST["prod2qunatity"]);
}
if (isset($_REQUEST['saveprod3'])) {

    $_SESSION['cart']['prod3']= array("product"=>$_REQUEST["prod3"],"prodprice"=>$_REQUEST["prod3price"]
    ,"prodqunatity" => $_REQUEST["prod3qunatity"]);
}
if (isset($_REQUEST['saveprod4'])) {

    $_SESSION['cart']['prod4']= array("product"=>$_REQUEST["prod4"],"prodprice"=>$_REQUEST["prod4price"]
    ,"prodqunatity" => $_REQUEST["prod4qunatity"]);
    
}

?>


<div class="containar">
    <div class="row">
        <div class="col mt-3 md-3">
            <div class="card" >
            <img src="image\iphone14.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">iphone14</h5>
            <ul>
                <li>price : 100000</li>
                <li>qunatity : 1</li>
            </ul>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <form method="post">
                <input type="hidden" value="iphone14" name="prod1" id="prode1">
                <input type="hidden" value="100000" name="prod1price" id="prode1price">
                <input type="hidden" value="1" name="prod1qunatity" id="prode1qunatity">
                <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod1" id="saveprod1">
            </form>
            </div>
            </div>
        </div>
        <div class="col mt-3 md-3">
        <div class="card" >
            <img src="image\iphone13.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                        <h5 class="card-title">iphone13</h5>
            <ul>
                <li>price : 90000</li>
                <li>qunatity : 1</li>
            </ul>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <form method="post">
                <input type="hidden" value="iphone13" name="prod2" id="prode2">
                <input type="hidden" value="90000" name="prod2price" id="prode2price">
                <input type="hidden" value="1" name="prod2qunatity" id="prode2qunatity">
                <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod2" id="saveprod2">
            </form>
            </div>
            </div>
        </div>
        <div class="col mt-3 md-3">
        <div class="card" >
            <img src="image\iphone12.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                        <h5 class="card-title">iphone12</h5>
            <ul>
                <li>price : 80000</li>
                <li>qunatity : 1</li>
            </ul>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <form method="post">
                <input type="hidden" value="iphone12" name="prod3" id="prode3">
                <input type="hidden" value="80000" name="prod3price" id="prode3price">
                <input type="hidden" value="1" name="prod3qunatity" id="prode3qunatity">
                <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod3" id="saveprod3">
            </form>
            </div>
            </div>
        </div>
        <div class="col mt-3 md-3">
        <div class="card" >
            <img src="image\iphone11.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                        <h5 class="card-title">iphone11</h5>
            <ul>
                <li>price : 70000</li>
                <li>qunatity : 1</li>
            </ul>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <form method="post">
                <input type="hidden" value="iphone11" name="prod4" id="prode4">
                <input type="hidden" value="70000" name="prod4price" id="prode4price">
                <input type="hidden" value="1" name="prod4qunatity" id="prode4qunatity">
                <input class="btn btn-primary" type="submit" value="add to cart" name="saveprod4" id="saveprod4">
            </form>
            </div>
            </div>
        </div>
    </div>
</div>