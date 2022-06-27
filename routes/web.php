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

Route::get('/main', function () {
    return view('landing');
})->name('main');

Route::get('/about', function () {
    return view('info');
})->name('about');

Route::get('/container', function () {
    return view('desktop_container');
})->name('container');

Route::get('/portfolio', function () {
    return view('desktop_portfolio');
});

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');

Route::post('/main', 'App\Http\Controllers\ContactController@submit')->name('contact-form');


Route::get('/index', 'App\Http\Controllers\HomeController@index');

Route::get('/index/{id}', 'App\Http\Controllers\CategoryController@show');


