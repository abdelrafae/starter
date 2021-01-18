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
Route::get('test1', function () {
    return "welcome";
});
//route parameter(required parameter/{id})
Route::get('test2/{id}', function ($id) {
    return $id;
})->name ('a');//route name



//route parameter(optional parameter/{id?})
Route::get('login', function () {
    return "welcome you must login first";
}) ->name ('login');

/*
Route:: namespace ('Admin')->group(function(){
        //all route only access controller or methods in folder name front
    Route::get('users','UserController@showUsereName');

});
*/
Route::group(['namespace'=> 'Admin'],function(){
    Route::get('users1','FirstController@showString1');
    Route::get('users2','FirstController@showString2');
    Route::get('users3','FirstController@showString3');
    Route::get('users4','FirstController@showString4');
});
Route::get('data','NewsController@indexWelcome1');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/',function (){
    return 'Home';
});
Route::get('/dashboard',function (){
    return 'dashboard';
});
