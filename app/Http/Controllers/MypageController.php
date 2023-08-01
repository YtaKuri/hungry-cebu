<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // ユーザーがログインしていることを確認
    // }

    // public function separateMypage()
    // {
    //     $user = Auth::user();
    //     $reservations = Reservation::where('user_id', $user->id)->latest()->get();
    //     return view('posts.mypage', ['reservations' => $reservations]);
    // }

    public function index()
    {
        return view('posts.mypage');
    }

    public function show($id)
    {
        // ユーザーの予約データを取得
        $reservations = Reservation::latest()->get();

        // 特定の$idに関連するAdmin情報を取得
        $admin = Admin::find($id);

        // 予約データとAdmin情報をビューに渡す
        return view('posts.mypage', ['reservations' => $reservations, 'admin' => $admin]);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('posts.mypage');
    }
}