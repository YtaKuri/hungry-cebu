<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()

{
    // 予約一覧を取得してビューに渡す
    
    $reservations = Reservation::all();
    
    // return view('reservations.index', ['reservations' => $reservations]);
    return view('reservations.index', compact('reservations'));
    }
    
    public function create()
    
    {
    
    // 新しい予約を作成するビューを表示
    
    return view('reservations.create');
    
    }
    
    public function store(Request $request)
    
    {
    $reservation = new Reservation;
    // 他のプロパティ...
    $reservation->date = $request->date;
    $reservation->people = $request->people;
    // 他のプロパティ...
    $reservation->user_id = auth()->id();
    

    $reservation->save();

    return redirect('/reservations');
    
    // フォームから送信された予約情報を保存する
    
    Reservation::create($request->all());
    
    return redirect()->route('reservations.index')->with('success', '予約が追加されました');
    
    }
    
    public function destroy(Reservation $reservation)
    
    {
    
    // 予約を削除する
    
    $reservation->delete();
    
    return redirect()->route('reservations.index')->with('success', '予約が削除されました');
    
    }
    
    public function calendar()
    
    {
    
    // 予約データを取得し、カレンダーが要求する形式に変換
    
    $reservations = Reservation::all()->map(function ($reservation) {
    
    return [
    
    'title' => $reservation->name,
    
    'start' => $reservation->date,
    
    // ここに必要な他のフィールドを追加できます
    
    ];
    
    });
    
    return view('reservations.calendar', ['reservations' => $reservations->toJson()]);
    
    }
    
    public function show($date)
    
    {
    
    $reservation = Reservation::where('date', $date)->firstOrFail();
    
    return view('reservations.show', compact('reservation'));
    
    }
    
}

