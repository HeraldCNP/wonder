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

//Route::get('/', function () {
//    return view('layout');
//})->name('inicio');

Auth::routes();

Route::get('/', 'HomeController@index')->name('inicio');
Route::get('/trabajos', 'HomeController@works')->name('trabajos');
Route::get('/desarrollo-web', 'HomeController@web')->name('web');
Route::get('/diseño-grafico', 'HomeController@desing')->name('desing');
Route::get('/marketing-digital', 'HomeController@marketing')->name('marketing');
Route::get('/fotografia-profesional', 'HomeController@photo')->name('photo');
Route::get('/edicion-de-video', 'HomeController@video')->name('video');
Route::get('/edicion-de-audio', 'HomeController@audio')->name('audio');



Route::group(['
        prefix' => 'Admin',
    'namespace' => 'Admin', 'middleware' => 'auth'],
//    'middleware' => 'auth']
    function (){


        Route::resource('/role', 'RoleController')->names('role');
        Route::resource('/works', 'WorkController');
        Route::resource('/companies', 'CompanyController');
        Route::resource('/counts', 'CountController')->except('destroy', 'show', 'store', 'create');
        Route::resource('usuarios', 'UserController');
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    });
