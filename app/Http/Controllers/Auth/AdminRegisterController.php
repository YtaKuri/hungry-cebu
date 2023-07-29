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

        // 画像の保存先を指定
        // $store_img = request()->file('store_img')->getClientOriginalName();
        // request()->file('store_img')->storeAs('public/images', $store_img);

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
    }

}

