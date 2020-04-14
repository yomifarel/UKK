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


Route::get('/', 'HandlerController@landing')->name('landing');
Route::get('/masuk', 'AuthController@getLogin')
        ->name('getLogin')
        ->middleware('guest');

Route::post('/masuk', 'AuthController@postLogin')->name('postLogin');

Route::get('/registrasi', 'AuthController@getRegister')
        ->name('getRegister')
        ->middleware('guest');

Route::post('/registrasi', 'AuthController@postRegister')->name('postRegister');

route::get('/dashboard', 'HandlerController@dashboard')
        ->name('dashboard');

        // ->middleware('auth');
route::resource('laporan','LaporanController');

route::middleware('auth')->group(function(){
    
});

route::get('/init', 'Handlercontroller@init')->name('init')->middleware('auth');

route::post('/logout','AuthController@logout')->name('logout')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
