<?php
// app/Http/Controllers/AdminAuthController.php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.login.form');
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        // ログイン処理を行うコードを追加
        // 例:
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/reservations'); // ログイン成功後のダッシュボードへリダイレクト
        } else {
            return back()->withErrors(['message' => 'ログインに失敗しました。']);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}