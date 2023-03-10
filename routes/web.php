<?php

use App\Http\Controllers\UserController;
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

// Pertama Buka
Route::get('/', function () {
    return view('user.register', ['title' => 'register']);
})->name('register');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

// Buka Kedua
Route::get('/login', function () {
    return view('login', ['title' => 'login']);
})->name('login');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

// Buka Ketiga
Route::get('/homepage', function () {
    return view('welcome', ['title' => 'welcome']);
})->name('welcome');

// Opsional
Route::get('/home', function () {
    return view('home', ['title' => 'home']);
})->name('home');


Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('logout', [UserController::class, 'logout'])->name('logout');
