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

Route::get('/', function () {
  return view('/site/main');
})->name('main');

// 로그인 후의 메인 layout
Route::get('/site/main_1', function () {
  return view('/site/main_1');
});

Route::get('/site/login', function () {
  return view('/site/login');
})->name('login');

Route::get('/site/register/step01', function () {
  return view('/site/register-step01');
})->name('register-01');

Route::get('/site/register/step02', function () {
  return view('/site/register-step02');
})->name('register-02');

Route::get('/site/register/step02-sns', function () {
  return view('/site/register-step02-sns');
})->name('register-02');

Route::get('/site/find-auth', function() {
    return view('/site/find-auth');
});

Route::get('/item/recommend', function() {
  return view('/item/recommend');
});

Route::get('/item/recommend/goodcue', function() {
  return view('/item/recommend/goodcue');
});