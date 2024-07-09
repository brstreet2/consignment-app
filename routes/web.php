<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');

// START {FE dummy Route Field}

Route::get('/top-up/name', [ProductController::class, 'topUpIndex'])->name('top-up.index');
Route::get('/buy-account/name', [ProductController::class, 'buyAccountIndex'])->name('buy-account.index');
Route::get('/products', [ProductController::class, 'getAllProducts'])->name('get.products');
Route::get('/payment/token123', [ProductController::class, 'payment'])->name('product.payment');
Route::get('/transaction', function(){ return view('transaction.list-trx'); })->name('list.transaction');
Route::get('/transaction/check', function(){ return view('transaction.check'); })->name('check.transaction');
Route::get('/faq', function(){ return view('dashboard.faq'); })->name('faq');
Route::get('/contact-us', function(){ return view('dashboard.contact-us'); })->name('contact-us');

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
