<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showLoginPage()
    {
        return view('user_login');
    }

    public function handleLogin(Request $request)
    {
        // ログイン処理の実装
        // ユーザーが送信したメールアドレスとパスワードを取得
        $email = $request->input('email');
        $password = $request->input('password');

        // ここにユーザーログインの処理を記述

        // ログイン成功時には適切なリダイレクト先に遷移
        return redirect()->route('dashboard');
    }

    public function register(Request $request)
    {
        // バリデーションのルールを設定
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];

        // バリデーションの実行
        $request->validate($rules);

        // 新しいユーザーの作成
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // 登録後に遷移するページなどを設定
        return redirect()->route('user.login')->with('success', 'ユーザー登録が完了しました。ログインしてください。');
    }
}
