<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');

// START {FE dummy Route Field}

Route::get('/top-up/name', [ProductController::class, 'index'])->name('product.index');
Route::get('/payment/token123', [ProductController::class, 'payment'])->name('product.payment');

// END {FE dummy Route Field}


// contoh routing 
// Route::group([
//     'middleware' => [
//         '',
//         ''
//     ],
//     'prefix'     => '',
// ], function () {
// });


// Auth
Route::group(['prefix' => 'auth'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
