<?php

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

Route::get('/allproduct', [App\Http\Controllers\ProductController::class, 'allproduct']);
Route::post('/insert', [App\Http\Controllers\ProductController::class, 'insert']);
Route::get('/productdatabyid/{id}', [App\Http\Controllers\ProductController::class, 'apiedit']);
Route::post('/updatepro/{id}', [App\Http\Controllers\ProductController::class, 'updatebyapi']);
Route::get('/deleteprobyid/{id}', [App\Http\Controllers\ProductController::class, 'deletebyapi']);

