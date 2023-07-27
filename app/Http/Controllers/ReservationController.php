<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
   
    // 予約作成ページを表示する
    public function create()
    {
        return view('reservations.create');
    }

    // 予約を保存する
    public function store(Request $request)
    {
        // バリデーションのルールを設定する（必要に応じてカスタマイズ）
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'date' => 'required|date',
            'people' => 'required|integer|min:1',
        ];

        // バリデーションを実行
        $validatedData = $request->validate($rules);

        // 予約を保存
        $reservation = new Reservation;
        $reservation->name = $validatedData['name'];
        $reservation->email = $validatedData['email'];
        $reservation->date = $validatedData['date'];
        $reservation->people = $validatedData['people'];
        $reservation->save();

        // 成功したら予約一覧ページにリダイレクト
        return redirect()->route('reservations.index');
    }

    // 予約一覧ページを表示する
    public function index()
    {
        $reservations = Reservation::all(); // すべての予約を取得

        return view('reservations.index', ['reservations' => $reservations]);
    }
    // 予約の詳細を表示する
    public function show($id)
    {
        $reservation = Reservation::find($id); // IDによって予約を取得

        if ($reservation) {
            return view('reservations.show', ['reservation' => $reservation]);
        } else {
            return redirect()->route('reservations.index')
                ->with('error', 'Reservation not found.'); 
            // エラーハンドリング（予約が見つからない場合など）
        }
    }

    // 予約を削除する
    public function destroy($id)
    {
        $reservation = Reservation::find($id); // IDによって予約を取得

        if ($reservation) {
            $reservation->delete(); // 予約を削除
        }

        return redirect()->route('reservations.index'); // 予約一覧ページにリダイレクト
    }
}
