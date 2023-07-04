<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::resource('register', Register::class);
Route::get('regind', function () {
    return view('register/customer');
});
Route::get('regven', function () {
    return view('register/client');
});

Route::resource('login', Login::class);
Route::get('logind', function() {
    return view('login/customer');
});
Route::get('logven', function() {
    return view('login/client');  
});

Route::post('/login', [Login::class, 'auth'])->name('login');
Route::delete('/logout', [Login::class, 'logout'])->name('logout');