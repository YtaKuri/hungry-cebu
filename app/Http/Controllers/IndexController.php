<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
        public function index()
    {
        // 複数の予約情報を取得
        $admins = Admin::all();

        return view('posts.index', ['admins' => $admins]);
    }

        public function show($id)
    {
        // 特定の予約情報を取得
        $admin = Admin::find($id);

        return view('posts.show', ['admin' => $admin]);
    }
}
