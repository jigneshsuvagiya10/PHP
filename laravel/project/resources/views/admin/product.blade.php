@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">{{ __('All Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allprod as $data)
                            <tr>
                                <td>{{$data->product_title}}</td>
                                <td>{{$data->product_description}}</td>
                                <td>{{$data->product_quantity}}</td>
                                <td>{{$data->product_price}}</td>
                                <td>
                                    <a href="deletepro/{{$data->id}}">Delete</a>
                                    <a href="editpro/{{$data->id}}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection