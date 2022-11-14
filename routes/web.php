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

Route::get('/hello','App\Http\Controllers\SiteController@hello');

Route::get('/users/{id?}','App\Http\Controllers\UserController@show');
Route::get('/users','App\Http\Controllers\UserController@show2');

//Route::get('/users/{id}','App\Http\Controllers\UserController@show');

Route::get('/posts/{post}/comments/{comment}', function($post,$comment){
    return "posts $post , comments $comment";
});

// Route::get('/game',function(){
//     return view('game1');
// });

// Route::view('/game2','game2');

Route::get('game/{id}','App\Http\Controllers\SiteController@play');

Route::get('admin','App\Http\Controllers\SiteController@dashboard');