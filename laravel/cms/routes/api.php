<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insert',[CustomerController::class , 'store']);
// Route::post('/uploadimg',[CustomerController::class , 'uploadimg']);
Route::get('/customerdata',[CustomerController::class , 'show']);
Route::get('/deletecustomer/{id}',[CustomerController::class , 'destroy']);
Route::get('/customerbyid/{id}',[CustomerController::class , 'edit']);
Route::post('/updatecustom/{id}',[CustomerController::class , 'update']);