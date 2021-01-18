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

Route::get('/admin', function () {
    return "Hello admin";
});

/*
Route ::get ('string','Admin\FirstController@showString');
*/
Route::group(['namespace'=>'Admin'],function (){
    Route ::get ('string','FirstController@showString');

});

Route::resource('news','NewsController');

Route::get('indexc','NewsController@indexWelcome');

Route::get('landing','NewsController@landing');
