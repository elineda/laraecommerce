<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panier','PanierController@index');
Route::get('/panier/s/{n}','PanierController@supp')->where('n','[0-9]+');
Route::get('/panier/a/{n}','PanierController@add')->where('n','[0-9]+');

Route::get('/produit','ProduitController@index');

Route::get('/description/{n}','DescriptionController@index')->where('n','[0-9]+');

