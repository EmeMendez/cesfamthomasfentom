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
//     return view('web.home');
// });


Route::get('/covid-19','Web\HomeController@index')->name('web.home.index');



Route::name('web.')->group(function () {

        Route::view('/thomas-fenton/desarrollo-organizacional/historia', 'web.fenton.history')->name('fenton.history');
        Route::view('/thomas-fenton/desarrollo-organizacional/mision-vision', 'web.fenton.mission-vision')->name('fenton.mission-vision');
        Route::view('/thomas-fenton/desarrollo-organizacional/politica', 'web.fenton.politic')->name('fenton.politic');
        Route::view('/thomas-fenton/ubicacion', 'web.fenton.location')->name('fenton.location');
        
        Route::get('/thomas-fenton/noticias', 'Web\PostController@news')->name('fenton.news');
        Route::get('/thomas-fenton/noticias/categoria/{url}', 'Web\PostController@category')->name('fenton.category');
        Route::get('/thomas-fenton/noticias/etiqueta/{url}', 'Web\PostController@tag')->name('fenton.tag');


        Route::view('/rio-seco/desarrollo-organizacional/historia', 'web.rioseco.history')->name('rioseco.history');
        Route::view('/rio-seco/desarrollo-organizacional/mission-vision', 'web.rioseco.mission-vision')->name('rioseco.mission-vision');
        Route::view('/rio-seco/desarrollo-organizacional/vision', 'web.rioseco.vision')->name('rioseco.vision');
        Route::view('/rio-seco/desarrollo-organizacional/politica', 'web.rioseco.politic')->name('rioseco.politic');
        Route::view('/rio-seco/ubicacion', 'web.rioseco.location')->name('rioseco.location');

        // Route::view('/sarabraun/desarrollo-organizacional/historia', 'web.sarabraun.history')->name('sarabraun.history');
        // Route::view('/sarabraun/desarrollo-organizacional/mision-vision', 'web.sarabraun.mission-vision')->name('sarabraun.mission-vision');
        // Route::view('/sarabraun/desarrollo-organizacional/politica', 'web.sarabraun.politic')->name('sarabraun.politic');
        // Route::view('/sarabraun/ubicacion', 'web.fsarabraunlocation')->name('sarabraun.location');


        Route::view('/programas/salud-mujer', 'web.programs.woman')->name('programs.woman');
        Route::view('/programas/salud-infantil', 'web.programs.childish')->name('programs.childish');
        Route::view('/programas/salud-adulto', 'web.programs.adult')->name('programs.adult');
        Route::view('/programas/salud-mental', 'web.programs.mental')->name('programs.mental');
        Route::view('/programas/salud-dental', 'web.programs.dental')->name('programs.dental');
        Route::view('/programas/salud-cardiovascular', 'web.programs.cardiovascular')->name('programs.cardiovascular');

        Route::view('/temas-de-salud/promotion', 'web.healthissues.promotion')->name('healthissues.promotion');
        Route::view('/temas-de-salud/mais', 'web.healthissues.mais')->name('healthissues.mais');
        Route::view('/temas-de-salud/vacunacion', 'web.healthissues.vaccination')->name('healthissues.vaccination');
        Route::view('/temas-de-salud/tbc', 'web.healthissues.tbc')->name('healthissues.tbc');

        Route::view('/calidad', 'web.quality')->name('quality');
        Route::get('/','Web\PostController@home')->name('home');

});




// App::setlocale('es');

//admin routes



Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return redirect('admin/home');
    });    
    Route::get('/home', 'NewsController@index')->name('home');
    Auth::routes(['verify' => true, 'register' => false]);

});









Route::middleware(['auth','verified'])->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::prefix('admin')->group(function () {
                    Route::resource('categorias',   'CategoryController')->names('categories')->parameters(['categorias' => 'category']);
                    Route::resource('etiquetas',    'TagController')->names('tags')->parameters(['etiquetas' => 'tag']);;
                    Route::resource('usuarios' ,    'UserController')->names('users')->parameters(['usuarios' => 'user']);              
                    Route::post('usuario/{user}/restore','UserController@restore')->name('users.restore');
                    Route::post('post/{post}/restore','PostController@restore')->name('posts.restore');
                    Route::post('categoria/{category}/restore','CategoryController@restore')->name('categories.restore');
                    Route::post('etiqueta/{tag}/restore','TagController@restore')->name('tags.restore');                   
                    
                    
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











