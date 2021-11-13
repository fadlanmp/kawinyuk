<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-edit', function () {
        return view('profile-edit');
});