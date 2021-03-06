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
Route::get('/trashedBlogs','App\Http\Controllers\BlogsController@getTrashedBlogs');
Route::get('/admin',[App\Http\Controllers\BlogsController::class, 'index']);
Route::resource('blogs','App\Http\Controllers\BlogsController');
Route::get('/blogs/user/{id}','App\Http\Controllers\BlogsController@userBlogs');
Route::get('/users','App\Http\Controllers\UsersController@index');
Route::get('/myblogs','App\Http\Controllers\BlogsController@myBlogs');
Route::get('/trashedBlogs','App\Http\Controllers\BlogsController@getTrashedBlogs');
Route::get('/restoreBlogs/{id}','App\Http\Controllers\BlogsController@restoreBlogs');
Route::delete('/deleteBlogs/{id}','App\Http\Controllers\BlogsController@deleteBlogPermanently');

Route::get('/','App\Http\Controllers\Front\BlogsController@blogs');
Route::get('/singleblog/{id}','App\Http\Controllers\Front\BlogsController@show');

Route::get('/categories/{category}', 'App\Http\Controllers\Front\CategoryController@NewsBlogs');
Route::get('/contactform','App\Http\Controllers\ContactFormController@contactform');
Route::post('/contactform','App\Http\Controllers\ContactFormController@SendEmail');