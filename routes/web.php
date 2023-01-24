<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\NilaiControllers;
use App\Http\Controllers\DosenControllers;

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
    return view('auth/login');
});
Route::resource('dosen',DosenControllers::class);

Route::get('/index', function () {
    return view('index');
});
Route::resource('sisw',SiswaControllers::class);

route::get('/table', function(){
    return view('table');
});

route::get('/jadwal', function(){
    return view('jadwal');
});

route::get('/daftar_dosen', function(){
    return view('daftar_dosen');
});

route::get('/tugas', function(){
    return view('tugas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/nilai', function () {
    return view('welcome');
});
Route::resource('nilai',NilaiControllers::class);

route::get('/profile', function(){
    return view('layout/profile');
});

route::get('/setting', function(){
    return view('layout/setting');
});

Route::resource('/poto', \App\Http\Controllers\PotoController::class);