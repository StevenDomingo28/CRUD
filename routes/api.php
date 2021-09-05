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
Route::post('/list', 'App\Http\Controllers\ShopController@createProduct');
Route::get('/list', 'App\Http\Controllers\ShopController@getAllProduct');
Route::get('/list/{id}', 'App\Http\Controllers\ShopController@getProductById');
Route::put('/list/{id}','App\Http\Controllers\ShopController@updateProductById');
Route::delete('/list/{id}','App\Http\Controllers\ShopController@deleteProductById');

