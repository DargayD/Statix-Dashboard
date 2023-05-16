<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


/* WEBSITE LINKS */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/book', function () {
    return view('book');
})->name('book');

Route::get('/about', function () {
    return view('about');
})->name('about');


/* USER INFO TO DB */
Route::post('/book', [UserController::class, 'store'])->name('users.store');
Route::get('/dashboard', [UserController::class, 'displayData'])->name('dashboard');





/* ADMIN LINKS */
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');


/* ADMIN AUTH LOGIN */
Route::post('/login', [AuthController::class, 'login'])->name('admin_users.login');
