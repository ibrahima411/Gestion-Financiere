<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

Auth::routes();
// ROUTE PROFIL CLIENT
Route::middleware(['auth', 'client'])->group(function() {
    Route::get('/dashboard', [HomeController::class, 'client'])->name('client');

});

