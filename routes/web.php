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

Route::get('/meissaenterprise', function () {
    return view('meissaenterprise');
});