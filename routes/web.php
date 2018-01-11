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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/travels', function () {
    return view('travels');
});

Route::get('/prints', function () {
    return view('prints');
});

Route::get('/nouns', function () {
    return view('nouns');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
