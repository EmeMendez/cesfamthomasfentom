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


//admin site routes
Auth::routes();


Route::get('/','PostController@index')->name('posts.index');
Route::get('/post/{url}','PostController@show')->name('posts.show');

Route::get('post/categoria/{url}','PostController@category')->name('posts.category');
Route::get('post/etiqueta/{url}','PostController@tag')->name('posts.tag');

// Route::get('/hsome', 'HomeController@index')->name('home');


//admin routes

Route::resource('/admin/categorias','Admin\CategoryController');
Route::resource('/admin/tags','Admin\TagController');
Route::resource('/admin/posts','Admin\PostController');