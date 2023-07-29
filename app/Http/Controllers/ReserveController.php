<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
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

    //
    public function create()
    {
        return view('posts.reserve');
    }

    public function store(Request $request)
    {
        // dd($request);
        $reservation = new Reservation();
        // $reservation -> title = $request -> title;
        $reservation -> date = $request -> date;
        $reservation -> people = $request -> people;
        $reservation -> time = $request -> time;
        $reservation -> user_id = Auth::user()->id;

        $reservation -> save();

        return redirect()->route('posts.mypage');
    }
}
