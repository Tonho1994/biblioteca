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
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cientificos', function () {
    return view('libros.cientificos');
});

Route::get('/manga', function () {
    return view('libros.manga');
});

Route::get('/literatura', function () {
    return view('libros.literatura');
});

Route::get('/comics', function () {
    return view('libros.comics');
});

Route::get('/independientes', function () {
    return view('libros.independientes');
});

Route::get('/quienes_somos', function () {
    return view('quienes_somos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

