<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ReservationController;



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

Route::get('/index', 'App\Http\Controllers\IndexController@index')->name('posts.index');

Route::get('/mypage', 'App\Http\Controllers\MypageController@show')->name('posts.mypage');

Route::get('/reserve', 'App\Http\Controllers\ReserveController@create')->name('posts.reserve');

Route::get('/index/search ', 'App\Http\Controllers\IndexController@search')->name('posts.search');

Route::middleware('auth')->group(function () {
    Route::get('/reservations/create', 'ReservationController@create');
    Route::post('/reservations', 'ReservationController@store');
    // 他の認証が必要なルート...
});

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::get('/reservations/calendar', [ReservationController::class, 'calendar'])->name('reservations.calendar');

Route::get('/reservations/{date}', [ReservationController::class, 'show']);

