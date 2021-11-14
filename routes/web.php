<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\ServicesController;

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
    return view('landingpage');
});
Route::get('/signup', function () {
    return view('signup');
})->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('/service/posts', ServicesController::class)->middleware('auth');
Route::resource('/vendor/posts', VendorsController::class)->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/videografer', function () {
    return view('videografer');
});

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/dekorasi', function () {
    return view('dekorasi');
});

Route::get('/deskripsi', function () {
    return view('deskripsi');
});
