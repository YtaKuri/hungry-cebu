<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth'); // ユーザーがログインしていることを確認
    }

    public function show()
    {
        $user = Auth::user();
        $reservations = Reservation::where('user_id', $user->id)->latest()->get();
        return view('posts.mypage', ['reservations' => $reservations]);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('posts.mypage');
    }
}