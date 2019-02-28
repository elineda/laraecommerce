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

//Route::get('/prod','ProdControllerAPI@all');
//Route::get('/prodone/{id}','ProdControllerAPI@get')->where('n','[0-9]+');
//Route::post('/prod','ProdControllerAPI@add');
//Route::put('/prod/{id}','ProdControllerAPI@modi')->where('n','[0-9]+');
//Route::delete('/prod/{id}','ProdControllerAPI@del')->where('n','[0-9]+');

Route::group([
    'prefix'=>'prod'
], function(){
    Route::get('/','ProdControllerAPI@all');
    Route::get('/one/{id}','ProdControllerAPI@get')->where('n','[0-9]+');
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function(){
        Route::put('/mod/{id}','ProdControllerAPI@modi')->where('n','[0-9]+');
        Route::delete('/del/{id}','ProdControllerAPI@del')->where('n','[0-9]+');
        Route::get('logout', 'AuthController@logout');
    });
});

Route::get('/ach','ProdControllerAPI@allachat');
Route::get('/achone/{id}','ProdControllerAPI@getachat')->where('n','[0-9]+');

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('lophp artisan key:generategin', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
