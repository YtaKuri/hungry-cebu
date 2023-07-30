<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    // indexページからのデータを受け取って、reserveページにそのデータを返す
    // public function index()
    // {
    //     // 複数の予約情報を取得
    //     $admins = Admin::all();

    //     return view('posts.reserve', ['admins' => $admins]);
    // }

    //     public function show($id)
    // {
    //     // 特定の予約情報を取得
    //     $admin = Admin::find($id);

    //     return view('posts.reserve', ['admin' => $admin]);
    // }

    // 予約情報を作成＆保存
    public function create()
    {
        return view('posts.reserve');
    }

    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation -> date = $request -> date;
        $reservation -> people = $request -> people;
        $reservation -> time = $request -> time;
        $reservation -> user_id = Auth::user()->id;

        $reservation -> save();

        return redirect()->route('posts.mypage');
    }
}
