<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return "i am about";
});
Route::get('/contact', function () {
    return "I am contact";
});


Route::get('/posts/{id}/{name}', function ($id,$name) {
    return "Id number is : ".$id."<br>And name is : ".$name;
});


Route::get('/admin/post/example',array('as'=>'admin.exp', function () {
    
    // <a href="route('admin.exp')">CLICK HEAR</a>

    $url= route('admin.exp');
    return "this url is : ".$url;
}));

// Route::get('/post','\App\Http\Controllers\postcontroller@index');  OR 
// Route::get('/post',[postcontroller::class,'index']);  
Route::get('/post/{id}',[postcontroller::class,'index']);