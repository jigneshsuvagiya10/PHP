@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">{{ __('Edit Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="post" action="updatepro/{{$editpro->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label class="form-label">Product Title :</label>
                            <input type="text" class="form-control" value="{{$editpro->product_title}}" name="product_title" id="product_title" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Product Description :</label>
                            <input type="text" class="form-control" value="{{$editpro->product_description}}" name="product_description" id="product_description" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Product Quantity :</label>
                            <input type="number" class="form-control" value="{{$editpro->product_quantity}}" name="product_quantity" id="product_quantity" required>
                        </div>
                        <div class="mb-3 md-3">
                            <label class="form-label">Product Price :</label>
                            <input type="number" class="form-control" value="{{$editpro->product_price}}" name="product_price" id="product_price" required>
                        </div>
                        <div class="mb-3 md-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Update" name="update" id="update">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection