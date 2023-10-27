<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\musifyAuthController;
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
    return view('auth.welcome');
});
Route::get('/login',[musifyAuthController::class,'login']);
Route::get('/registration',[musifyAuthController::class,'registration']);
Route::post('/register-user', [musifyAuthController::class,'registeruser'])->name
('register-user');
Route::post('login-user', [musifyAuthController::class,'loginUser'])->name('login-user');
    