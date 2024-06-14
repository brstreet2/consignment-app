<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){ return view('auth.login'); })->name('login');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/top-up/name', [ProductController::class, 'index'])->name('product.index');


// contoh routing 
// Route::group([
//     'middleware' => [
//         '',
//         ''
//     ],
//     'prefix'     => '',
// ], function () {
// });
