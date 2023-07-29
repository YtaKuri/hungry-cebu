<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
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
        // $reservations = Reservation::latest()->get();
        // return view('posts.mypage', ['reservations'=>$reservations]);
    }

    

    public function edit($id){
        $reservation = Reservation::find($id);
        return view('posts.edit',['reservation'=>$reservation]);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation -> date = $request -> date;
        $reservation -> people = $request -> people;
        $reservation -> time = $request -> time;

        $reservation -> save();

        return redirect()->route('posts.mypage',compact('reservation'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('posts.mypage');
    }
    
    public function index()
    {
        return view('mypage');
    }

}