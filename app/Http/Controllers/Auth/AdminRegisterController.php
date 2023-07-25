<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class AdminRegistrationController extends Controller
// {
//     //
// }

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
            'password' => 'required|string|min:8|confirmed',
        ];

        // バリデーションを実行
        $request->validate($rules);

        // Adminをデータベースに保存
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->number = $request->number;
        $admin->opening_hours = $request->opening_hours;
        $admin->address = $request->address;
        $admin->password = bcrypt($request->password);
        // 必要に応じて他のフィールドも追加
        // $admin->store_img = $request->store_img;
        // $admin->facebook_id = $request->facebook_id;
        $admin->save();
    }

}

