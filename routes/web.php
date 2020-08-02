<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [ HomeController::class, 'showWelcome' ]);
Route::post('/signup', [ HomeController::class, 'postSignup' ])->name('signup');

Route::get('/privacy-policy', [ HomeController::class, 'privacyPolicy' ])->name('privacy-policy');

Route::namespace('Auth')->group(function() {
    Route::get('login', [ LoginController::class, 'showLoginForm']);
    Route::post('login', [ LoginController::class, 'login']);
    Route::get('register', [ RegisterController::class, 'showRegistrationForm']);
    Route::post('register', [ RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [ HomeController::class, 'dashboard' ])->name('dashboard');
});