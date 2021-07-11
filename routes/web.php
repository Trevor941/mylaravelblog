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


//Route::get('/','App\Http\Controllers\BlogsController@index');
Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::resource('blogs','App\Http\Controllers\BlogsController');
Route::get('/blogs/user/{id}','App\Http\Controllers\BlogsController@userBlogs');
Route::get('/users','App\Http\Controllers\UsersController@index');
Route::get('/myblogs','App\Http\Controllers\BlogsController@myBlogs');
Route::get('/chat/{id}','App\Http\Controllers\MessagesController@chatPage');
Route::post('/sendmsg/{id}','App\Http\Controllers\MessagesController@sendMessage')->name('send.msg');

Route::get('/','App\Http\Controllers\Front\BlogsController@blogs');