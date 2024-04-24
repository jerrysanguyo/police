<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnauthorizedController;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\SuperAdminRole;
use App\Http\Middleware\UserRole;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('unauthorize', [UnauthorizedController::class, 'index'])->name('unauthorized');

Route::middleware(['auth', SuperAdminRole::class])->group(function() {
    Route::prefix('superadmin')->name('superadmin.')->group(function() {

    });
});

Route::middleware(['auth', AdminRole::class])->group(function() {
    Route::prefix('admin')->name('admin.')->group(function() {

    });
});

Route::middleware(['auth', UserRole::class])->group(function() {
    Route::prefix('user')->name('user.')->group(function() {

    });
});