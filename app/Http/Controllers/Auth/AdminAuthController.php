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

    public function register(Request $request)
    {
        // バリデーションなどの処理を行い、新しいAdminを作成してデータベースに保存するコードを追加
        // 例:
        // $admin = new \App\Models\Admin();
        // $admin->name = $request->name;
        // $admin->email = $request->email;
        // $admin->password = bcrypt($request->password);
        // $admin->number = $request->number;
        // $admin->opening_hours = $request->opening_hours;
        // $admin->address = $request->address;
        // $admin->save();

        // 登録後にAdminをログインさせるなどの適切なリダイレクト処理を行う

        // return redirect('/admin/dashboard'); // 例: 登録後のダッシュボードへリダイレクト
    }

    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        // ログイン処理を行うコードを追加
        // 例:
        // $credentials = $request->only('email', 'password');
        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect('/admin/dashboard'); // ログイン成功後のダッシュボードへリダイレクト
        // } else {
        //     return back()->withErrors(['message' => 'ログインに失敗しました。']);
        // }
    }
    protected function redirectTo()
    {
        return '/reservation';
    }
}