<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/anything', function () {
    dd("testing");
});

Route::view('/viewtest', 'testingview');
Route::view('/admindashbord', 'admin.admindashbord');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/deletepro/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/add', [App\Http\Controllers\ProductController::class, 'store']);

Route::get('/editpro/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/editpro/updatepro/{id}', [App\Http\Controllers\ProductController::class, 'update']);

Route::get('/showproduct', [App\Http\Controllers\ProductController::class, 'showproduct']);

Route::middleware('auth:sanctum')->get('/addcart/{id}', [App\Http\Controllers\CartController::class, 'addtocart']);
Route::middleware('auth:sanctum')->get('/cart', [App\Http\Controllers\CartController::class, 'index']);