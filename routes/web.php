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
    return view('welcome');
});

Route::get('/meissaarm', function () {
    return view('meissaarm');
});

Route::get('/meissabreedfacility', function () {
    return view('meissabreedfacility');
});

Route::get('/meissabreeding', function () {
    return view('meissabreeding');
});

Route::get('/meissaclear', function () {
    return view('meissaclear');
});

Route::get('/meissafacility', function () {
    return view('meissafacility');
});

Route::get('/meissamars', function () {
    return view('meissamars');
});

Route::get('/meissahmst', function () {
    return view('meissahmst');
});

Route::get('/applicationdev', function () {
    return view('applicationdev');
});

Route::get('/webdev', function () {
    return view('webdev');
});

Route::get('/productdesign', function () {
    return view('productdesign');
});

Route::get('/datamgmt', function () {
    return view('datamgmt');
});

Route::get('/dataprivacy', function () {
    return view('dataprivacy');
});

Route::get('/termscondi', function () {
    return view('termscondi');
});
