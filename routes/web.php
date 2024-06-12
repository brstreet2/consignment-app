<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/login', function(){ return view('auth.login'); })->name('login');

// contoh routing 
// Route::group([
//     'middleware' => [
//         '',
//         ''
//     ],
//     'prefix'     => '',
// ], function () {
// });
