<?php

use App\Http\Controllers\CustomerController;
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
    return view('login');
});

Route::view('/login','login');
Route::view('/registration','registration');

Route::view('/admindashbord','admin.admindashbord');
Route::view('/customer','admin.customer');
Route::view('/cushome','cushome');

Route::post('/logindata',[CustomerController::class , 'login']);


