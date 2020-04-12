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


/* PUBLISING 작업 시작 */

/* FRONT */


Route::get('/pub', function () {
    return view('/pub');
});


Route::get('/site/main', function () {
    return view('/site/main');
});

Route::get('/site/main_1', function () {
    return view('/site/main_1');
});


Route::get('/site/login', function () {
    return view('/site/login');
});

Route::get('/site/register/step01', function () {
    return view('/site/register');
});

Route::get('/site/register/step02', function() {
    return view('/site/register-step02');
});