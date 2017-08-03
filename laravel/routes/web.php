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

Route::group(['middleware' => ['web']], function(){
    Route::resource('/', 'HomeController');
    Route::resource('productos', 'ProductController');
    Route::resource('servicios', 'ServiceController');
    Route::get('/quienes-somos', function () {
        return view('site.sections.about');
    });
    Route::get('solicitud', 'FormsController@request');
    Route::post('solicitud', 'FormsController@NewRequest');

    Route::get('alta-de-clientes', 'FormsController@clients');
    Route::post('alta-de-clientes', 'FormsController@NewClient');

    Route::resource('blog', 'NewsController');
    Route::get('publicacion/{id}', 'NewsController@show');


    Route::get('sendEmail', 'MailController@basic_email');
    Route::post('uploadFile', 'UploadController@upload');


    Route::get('/login', 'Auth\AuthController@login'); 
    Route::get('/logout', 'Auth\AuthController@logout');
    Route::post('authenticate', 'Auth\AuthController@authenticate');
});


Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'control', 'namespace' => 'Control'], function(){
    Route::get('/', function () {
        return redirect('control/dashboard');
    });
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('blog', 'BlogController');
    Route::post('blogImage/{id}', 'BlogController@fakeUpload');
    Route::resource('categorias', 'CategoriesController');
    Route::resource('productos', 'ProductsController');
    Route::resource('servicios', 'ServicesController');
});


Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'api', 'namespace' => 'API'], function(){
    Route::post('image', 'AdminController@uploadImage');
    Route::post('images/delete/{id}', 'AdminController@deleteImage');
});
