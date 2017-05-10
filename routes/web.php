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
    return view('site.sections.home');
});
Route::get('/productos', function () {
    return view('site.sections.products');
});
Route::get('/quienes-somos', function () {
    return view('site.sections.about');
});
Route::get('/servicios', function () {
    return view('site.sections.services');
});
Route::get('/solicitud', function () {
    return view('site.sections.request');
});
Route::get('/alta-de-clientes', function () {
    return view('site.sections.clients');
});
Route::get('/blog', function () {
    return view('site.sections.blog');
});

Route::get('/single', function () {
    return view('site.sections.blog-single');
});
