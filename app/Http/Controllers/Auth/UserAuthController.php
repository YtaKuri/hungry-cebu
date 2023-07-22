<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserAuthController extends Controller
// {
//     //
// }

// app/Http/Controllers/Auth/CustomerAuthController.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class UserAuthController extends Controller
{
    // ログインフォームの表示
    public function showLoginForm()
    {
        return view('auth.customer-login');
    }

    // ログイン処理
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended('/customer/dashboard');
        }

        return redirect()->route('customer.login')->with('error', 'ログイン情報が一致しません');
    }

    // ログアウト処理
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }

    // 新規登録フォームの表示
    public function showRegistrationForm()
    {
        return view('auth.customer-register');
    }

    // 新規登録処理
    public function register(Request $request)
    {
        // 顧客の新規登録処理を実装する
    }
}
