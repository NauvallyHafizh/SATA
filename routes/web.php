<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/home', function () {
//     return view('home', [
//         'title' => 'Home',
//         'active' => 'home'
//     ]);
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::resource('/profile', ProfileController::class)->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/form', [FormController::class,'create'])->middleware('admin');

Route::post('/form', [FormController::class, 'store']);

Route::get('/all-fertilizers', [FormController::class, 'index'])->middleware('auth');