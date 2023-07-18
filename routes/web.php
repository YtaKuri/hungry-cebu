<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login/restaurant', [App\Http\Controllers\Auth\LoginController::class, 'showRestaurantLoginForm']);
Route::get('/register/restaurant', [App\Http\Controllers\Auth\RegisterController::class, 'showRestaurantRegisterForm']);

Route::post('/login/restaurant', [App\Http\Controllers\Auth\LoginController::class, 'restaurantLogin']);
Route::post('/register/restaurant', [App\Http\Controllers\Auth\RegisterController::class, 'registerRestaurant'])->name('restaurant-register');

Route::view('/restaurant', 'restaurant')->middleware('auth:restaurant')->name('restaurant-home');
Route::get('/login/restaurant', [RestaurantController::class, 'showLoginForm'])->name('login.restaurant');
Route::get('/register/restaurant', [RestaurantController::class, 'showRegistrationForm'])->name('register.restaurant');


