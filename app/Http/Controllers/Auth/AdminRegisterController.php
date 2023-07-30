<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.admin_register');
    }

    public function register(Request $request)
    {
        // バリデーションルールを定義
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'number' => 'required|string|max:255',
            'opening_hours' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'store_img' => 'required|image',
            'password' => 'required|string|min:8|confirmed',
        ];

        // バリデーションを実行
        $request->validate($rules);

        // 画像をimagesに保存
        $path = $request->file('store_img')->store('public/images');

        // Adminをデータベースに保存
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->number = $request->number;
        $admin->opening_hours = $request->opening_hours;
        $admin->address = $request->address;
        $admin->password = bcrypt($request->password);
        $admin->store_img = $path;
        $admin->save();

        if ($admin->save()) {
            // 新しいページへのルート名を指定してリダイレクト
            return redirect()->route('reservations.index');
        } else {
            // データベース保存が失敗した場合は、エラー処理などを行う
            // 例えばエラーメッセージをフラッシュデータとして保存してリダイレクトする
            return redirect()->back()->with('error', 'データベースの保存に失敗しました。');
        }
    }

}

