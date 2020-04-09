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

// App::setlocale('es');

//admin routes



Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return redirect('admin/home');
    });    
    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes(['verify' => true]);

});


Route::middleware(['auth','verified'])->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::prefix('admin')->group(function () {
                    Route::resource('categorias',   'CategoryController')->names('categories')->parameters(['categorias' => 'category']);
                    Route::resource('etiquetas',    'TagController')->names('tags')->parameters(['etiquetas' => 'tag']);;
                    Route::resource('usuarios' ,    'UserController')->names('users')->parameters(['usuarios' => 'user']);              
                    Route::resource('posts',        'PostController')->names('posts');                                
                    Route::get('posts/{post}/image','PostController@image');/*vue*/
                    Route::get('posts/{post}/images','PostController@images');/*vue*/
                });
        });
    });
});



// Route::get('/post/{url}','PostController@show')->name('posts.show');

// Route::get('post/categoria/{url}','PostController@category')->name('posts.category');
// Route::get('post/etiqueta/{url}','PostController@tag')->name('posts.tag');











