@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($prod as $product)
        <div class="col-lg-3 mt-3">
            <div class="card">
                <!-- <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="Product image"> -->
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{$product->product_title}}</a>
                    </h4>
                    <h5>{{ $product->product_price }}</h5>
                    <p class="card-text">{{ $product->product_description }}</p>
                </div>
                <div class="card-footer">
                    <!-- <a href="# " onclick="event.preventDefault(); addtocart('{{$product->id}}');" class="btn btn-primary">Add to Cart</a> -->
                    <a href="addcart/{{$product->id}} " class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- <script>
    function addtocart(pid) {
        // console.log(pid);
        fetch("http://localhost:8000/api/addtocart/"+pid)
            .then((response) => response.json())
            .then((res) => {});
    }
</script> -->
@endsection