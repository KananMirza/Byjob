<?php

use App\Http\Controllers\AuthController\AuthController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\ProfileController\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('isUserLogin')->group(function () {
    Route::get('/profile',[ProfileController::class,'profileIndex'])->name('profileIndex');


    Route::get('/user/logout', [AuthController::class, "userLogout"])->name('userLogout');
});

Route::middleware('isUserLogout')->group(function () {
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
    Route::get('/register',[AuthController::class,'register'])->name('register');
});

Route::get('/',[HomeController::class,'index'])->name('index');
