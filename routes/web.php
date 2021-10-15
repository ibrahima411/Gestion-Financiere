<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SourceController;

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
    return redirect('/login');
});


Route::get('/home', function () {
    // Redirect if user not logged in
    if(!Auth::user()){
        return redirect('/login');
    }

    // Redirect if ^Administrateur^ is logged in
    if(Auth::user()->role_id == 1){
        return redirect()->route('dashboard.admin');
    }

    // Redirect if ^Client^ is logged in
    if(Auth::user()->role_id == 2){
        return redirect()->route('dashboard.client');
    }

});

Auth::routes();
// ROUTE PROFIL ADMIN
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    Route::get('/dashboard', [HomeController::class, 'admin'])->name('dashboard.admin');

});


// ROUTE PROFIL CLIENT
Route::middleware(['auth', 'client'])->group(function() {
    Route::get('/dashboard', [HomeController::class, 'client'])->name('dashboard.client');
    Route::resource('/source', SourceController::class);

});
