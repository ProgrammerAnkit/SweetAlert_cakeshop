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

Route::get('loginpage', function () {
    return view('Froent-End.login');
});
Route::view('view','shop');

// Route::get([
//     'uses'=>'ProductController@getIndex',
//     'as'=>'product.index'
// ]);

Route::get('product','ProductController@getIndex');