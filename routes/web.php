<?php

use Illuminate\Support\Facades\Artisan;
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


Route::get('storage-link', function (){
    Artisan::call('storage:link');
});

Route::get('/', 'HomeController@index')->name('inicio');
Route::get('/trabajos', 'HomeController@works')->name('trabajos');
Route::get('/desarrollo-web', 'HomeController@web')->name('desarrollo-web');
Route::get('/diseño-grafico', 'HomeController@desing')->name('diseno-grafico');
Route::get('/marketing-digital', 'HomeController@marketing')->name('marketing-digital');
Route::get('/fotografia-profesional', 'HomeController@photo')->name('fotografia');
Route::get('/produccion-de-video', 'HomeController@video')->name('produccion-de-video');
Route::get('/produccion-de-audio', 'HomeController@audio')->name('produccion-de-audio');

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});

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
