<?php

use App\Http\Controllers\AuthController\AuthController;
use App\Http\Controllers\GeneralController\GeneralController;
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
Route::middleware('UserLogout')->group(function () {
//Start Login and Register
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
    Route::post('/register',[AuthController::class,'register'])->name('register');

//End Login and Register
});
Route::middleware('UserLogin')->group(function () {
    Route::get('/profile',[ProfileController::class,'profileIndex'])->name('profileIndex');

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});
Route::get('/',[GeneralController::class,'index'])->name('index');

