<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\UserController;
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



// // 顧客用の認証ルート
// Route::get('/user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
// Route::post('/user/login', [UserAuthController::class, 'login']);
// Route::post('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
// Route::get('/user/register', [UserAuthController::class, 'showRegistrationForm'])->name('user.register');
// Route::post('/user/register', [UserAuthController::class, 'register']);

// // 管理者用の認証ルート
// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminAuthController::class, 'login']);
// Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
// Route::get('/admin/register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
// Route::post('/admin/register', [AdminAuthController::class, 'register']);

// Route::get('/login/restaurant', [App\Http\Controllers\Auth\LoginController::class, 'showRestaurantLoginForm']);
// Route::get('/register/restaurant', [App\Http\Controllers\Auth\RegisterController::class, 'showRestaurantRegisterForm']);

// Route::post('/login/restaurant', [App\Http\Controllers\Auth\LoginController::class, 'restaurantLogin']);
// Route::post('/register/restaurant', [App\Http\Controllers\Auth\RegisterController::class, 'registerRestaurant'])->name('restaurant-register');

// Route::view('/restaurant', 'restaurant')->middleware('auth:restaurant')->name('restaurant-home');
// Route::get('/login/restaurant', [RestaurantController::class, 'showLoginForm'])->name('login.restaurant');
// Route::get('/register/restaurant', [RestaurantController::class, 'showRegistrationForm'])->name('register.restaurant');


Route::get('/index', 'App\Http\Controllers\IndexController@index')->name('posts.index');

Route::get('/index/{id}', 'App\Http\Controllers\IndexController@show')->name('posts.show');

// Route::get('/index', 'App\Http\Controllers\ReserveController@index')->name('posts.index');

// Route::get('/index/{id}', 'App\Http\Controllers\ReserveController@show')->name('posts.show');

Route::get('/reserve', 'App\Http\Controllers\ReserveController@create')->name('posts.reserve');

Route::post('/reserve', 'App\Http\Controllers\ReserveController@store')->name('posts.store');

Route::get('/mypage', 'App\Http\Controllers\MypageController@show')->name('posts.mypage');

Route::get('/mypage/{id}/edit','App\Http\Controllers\MypageController@edit')->name('posts.edit');

Route::put('/mypage/{id}', 'App\Http\Controllers\MypageController@update')->name('posts.update');

Route::delete('/mypage/{id}','App\Http\Controllers\MypageController@destroy')->name('posts.destroy');


// routes/web.php

Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register.form');
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');
// Route::get('/admin/register', 'AdminAuthController@showRegistrationForm')->name('admin.register.form');
// Route::post('/admin/register', 'AdminAuthController@register')->name('admin.register');
// Route::get('/admin/login', 'App\Http\Controllers\AdminAuthController@showLoginForm')->name('admin.login.form');
// Route::post('/admin/login', 'App\Http\Controllers\AdminAuthController@login')->name('admin.login');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');


// // ユーザーログインページの表示
// Route::get('/login', [UserController::class, 'showLoginPage'])->name('user.login');

// // ログイン処理の実行
// Route::post('/login', [UserController::class, 'handleLogin']);


// // routes/web.php

// Route::post('/register', 'App\Http\Controllers\UserController@register')->name('user.registration');

// 予約一覧ページ
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

// 予約追加ページ
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');

// 予約保存
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// 予約詳細ページ
Route::get('/reservations/id/{id}', [ReservationController::class, 'show'])->name('reservations.show');

// 予約削除
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

// カレンダーの日付クリック時の予約詳細ページ
Route::get('/reservations/date/{date}', [ReservationController::class, 'show'])->name('reservations.dateShow');