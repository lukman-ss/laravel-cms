<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
// use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Livewire\Dashboard\Dashboard;
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
Route::get('/login', [Login::class, 'showLoginForm'])->name('login');
Route::post('/login', [Login::class, 'login']);
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/register', [Register::class, 'showRegistrationForm'] )->name('register');
// Route::post('/register', 'Auth\Register@register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [Dashboard::class, 'render']);

// Route::get('/spa', function () {
//     return view('layouts.dashboard');
// });

// Route::livewire('/spa/dashboard', [Dashboard::class, 'index'])->layout('layouts.dashboard');
// Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
