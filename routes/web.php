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

Route::get('/rota_um' , function() {
    return view('rota_um');
});

Route::get('/rota_dois' , function() {
    return view('rota_dois');
});

Route::get('/rota_tres' , function() {
    return view('rota_tres');
});