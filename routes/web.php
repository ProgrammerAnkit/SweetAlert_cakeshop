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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/welcome',[
    'uses'=> 'ProductController@welcome',
    'as' => 'welcome'
]);
Route::get('loginpage', function () {
    return view('Froent-End.login');
});
Route::view('/index','shop.index');

// Route::get([
//     'uses'=>'ProductController@getIndex',
//     'as'=>'product.index'
// ]);

// Route::get('product','ProductController@getIndex');

Route::get('/product',[
    'uses'=> 'ProductController@getIndex',
    'as' => 'shop.index'
]);


Route::group(['prefix'=>'user'], function(){
    Route::group(['middleware'=>'guest'], function(){

        Route::get('/singup',[
            'uses'=> 'Usercontroller@getsignup',
            'as' => 'User.signup'
        ]);
        
        Route::post('/singup',[
            'uses'=> 'Usercontroller@postsignup',
            'as' => 'User.signup'
        ]);
        //  Route:Post ('/singup', 'Usercontroller@postsignup');
        //  Route::view ('/singin', 'User.signin');
        
        Route::get('/singnin',[
            'uses'=> 'Usercontroller@getsignin',
            'as' => 'User.signin'
        ]);
        
        Route::post('/singnin',[
            'uses'=> 'Usercontroller@postsignin',
            'as' => 'User.signin'
        ]);

    });
   
    Route::group(['middleware'=>'auth'],function(){

    Route::get('/profile',[
        'uses'=> 'Usercontroller@getprofile',
        'as' => 'User.profile'
    ]);
    
    Route::get('/loguot',[
        'uses'=> 'Usercontroller@getlogout',
        'as' => 'User.logout'
    ]);
    
    });
    
});
