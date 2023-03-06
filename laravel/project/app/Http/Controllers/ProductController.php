<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $products)
    {
        // dd("pcontroller index");
        // $name = 'some one';
        // $email = 'someone@gmail.com';
        // $date = date('Y-m-d');
        // return view('admin.product', compact('name', 'email', 'date'));
        // $allprod = $products::get();
        // dd($allprod);
        return view('admin.product');  //, compact('allprod'));
    }
    public function allproduct(product $products)
    {
        // dd("hiii");
        $allprod = $products::get();
        // echo $allprod;
        // return view('admin.product', compact('allprod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( product $product, Request $request)
    {
        $product->product_title = $request->product_title;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->save();
        return redirect("product");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id,product $product)
    {
        $editpro = $product::find($id);
        // dd($editpro);

        return view('admin.editproduct', compact('editpro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, product $product)
    {
        $update = $product::find($id);

        $update->product_title = $request->product_title;
        $update->product_description = $request->product_description;
        $update->product_quantity = $request->product_quantity;
        $update->product_price = $request->product_price;
        $update->save();
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,product $product)
    {
        $probyid = $product::find($id);
        // dd($probyid);
        $probyid->delete();
        return redirect("product");
    }
}
