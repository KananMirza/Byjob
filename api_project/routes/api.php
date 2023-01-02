<?php

use App\Http\Controllers\AuthController\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/v1/')->middleware('checkTokenApi')->group(function () {
    Route::get('User', [AuthController::class, 'getUser']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});
Route::prefix('/v1/')->middleware('jwtTokenApi')->controller(AuthController::class)->group(function () {
    Route::get('me', 'me');
    Route::post('logout', 'logout');
});



