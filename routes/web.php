<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\AuthenticateAdmin;
use App\Http\Controllers\SearchController;
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
Route::get('/index/{id}', 'App\Http\Controllers\IndexController@show')->name('posts.index.show');

Route::get('/reserve', 'App\Http\Controllers\ReserveController@create')->name('posts.create');
Route::post('/reserve', 'App\Http\Controllers\ReserveController@store')->name('posts.store');
Route::get('/reserve/{id}', 'App\Http\Controllers\ReserveController@show')->name('posts.show');

// Route::get('/mypage', 'App\Http\Controllers\MypageController@index')->name('posts.mypage');
Route::get('/mypage', 'App\Http\Controllers\MypageController@show')->name('posts.mypage.show');
Route::get('/mypage/{id}/edit', 'App\Http\Controllers\MypageController@edit')->name('posts.mypage.edit');
Route::put('/mypage/{id}', 'App\Http\Controllers\MypageController@update')->name('posts.mypage.update');
Route::delete('/mypage/{id}', 'App\Http\Controllers\MypageController@destroy')->name('posts.mypage.destroy');



// routes/web.php

Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register.form');
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');


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

// Route::get('/your-route', 'YourController@yourMethod')->middleware('auth:admin');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/dashboard', function () {
    // このルートはログインしていないとアクセスできない
})->middleware('auth');

Route::middleware([AuthenticateUser::class])->group(function () {

    Route::get('/index', 'App\Http\Controllers\IndexController@index')->name('posts.index');

    Route::get('/index/{id}', 'App\Http\Controllers\IndexController@show')->name('posts.show');
    
    Route::get('/reserve', 'App\Http\Controllers\ReserveController@create')->name('posts.create');
    
    Route::get('/reserve/{id}', 'App\Http\Controllers\ReserveController@show')->name('posts.show');
    
    Route::post('/reserve', 'App\Http\Controllers\ReserveController@store')->name('posts.store');
    
    Route::get('/mypage', 'App\Http\Controllers\MypageController@show')->name('posts.mypage');
    
    Route::get('/mypage/{id}/edit','App\Http\Controllers\MypageController@edit')->name('posts.edit');
    
    Route::put('/mypage/{id}', 'App\Http\Controllers\MypageController@update')->name('posts.update');
    
    Route::delete('/mypage/{id}','App\Http\Controllers\MypageController@destroy')->name('posts.destroy');
    
    
});


Route::middleware([AuthenticateAdmin::class])->group(function () {

    // 予約一覧ページ
    // Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

    // 予約追加ページ
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');

    // 予約保存
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

    // 予約詳細ページ
    Route::get('/reservations/id/{id}', [ReservationController::class, 'show'])->name('reservations.show');

    // 予約削除
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    // Route::get('/your-route', 'YourController@yourMethod')->middleware('auth:admin');

    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


});
// 検索フォーム表示のルート
// Route::get('/search', 'App\Http\Controllers\SearchController@showSearchForm')->name('search.form');

// 検索結果の表示のルート
Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');
