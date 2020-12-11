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

Route::get('/', function () {
    return view('index');
});

Route::get('/price', function () {
    return view('price2');
});

Route::get('/electrician', function () {
    return view('electrician');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contacts', function () {
    return view('contacts');
});
