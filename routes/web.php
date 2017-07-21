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

Route::resource('/', 'HomeController');


Route::resource('productos', 'ProductController');
Route::resource('servicios', 'ServiceController');



Route::get('/quienes-somos', function () {
    return view('site.sections.about');
});
Route::get('/solicitud', function () {
    return view('site.sections.request');
});
Route::get('/alta-de-clientes', function () {
    return view('site.sections.clients');
});

Route::resource('blog', 'NewsController');
Route::get('publicacion/{id}', 'NewsController@show');
