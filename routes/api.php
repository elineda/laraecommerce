<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/prod','ProdControllerAPI@all');
Route::get('/prodone/{id}','ProdControllerAPI@get')->where('n','[0-9]+');
Route::post('/prod','ProdControllerAPI@add');
Route::put('/prod/{id}','ProdControllerAPI@modi')->where('n','[0-9]+');
Route::delete('/prod/{id}','ProdControllerAPI@del')->where('n','[0-9]+');
