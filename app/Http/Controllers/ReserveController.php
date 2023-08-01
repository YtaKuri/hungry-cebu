<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function show($id)
    {
        // 特定の予約情報を取得
        $admin = Admin::find($id);

        return view('posts.reserve', ['admin' => $admin]);
    }

    // 予約情報を作成＆保存
    public function create()
    {
        return view('posts.reserve');
    }

    public function store(Request $request)
    {
    // リクエストからデータを取得
    $date = $request->date;
    $people = $request->people;
    $time = $request->time;
    $adminName = $request->admin_name; // $admin->nameを取得

    // ログインしているユーザーのIDを取得
    $userId = Auth::user()->id;

    // Reservationモデルにデータを保存
    $reservation = new Reservation();
    $reservation->date = $date;
    $reservation->people = $people;
    $reservation->time = $time;
    $reservation->user_id = $userId;
    $reservation->name = $adminName; // $admin->nameを保存

    $reservation->save();

    return redirect()->route('posts.mypage');
    }
}
