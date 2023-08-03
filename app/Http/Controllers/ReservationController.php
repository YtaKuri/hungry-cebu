<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth; 

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
            'number' => ['required', 'max:255', 'regex:/^[0-9]+$/'],
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'people' => 'required|integer|min:1',
        ];

        // バリデーションを実行
        $validatedData = $request->validate($rules);

        $admin_id = Auth::guard('admin')->user()->id;

            // 管理者が入力した名前を取得
         $admin_name = $request->input('admin_name');

        // 予約を保存
        $reservation = new Reservation;
        $reservation->users_name = $admin_name;
        $reservation->name = $validatedData['name'];
        $reservation->admin_id = $admin_id; // admin_idを設定
        $reservation->number = $validatedData['number'];
        $reservation->date = $validatedData['date'];
        $reservation->time = $validatedData['time'];
        $reservation->people = $validatedData['people'];
        $reservation->user_id = null;

        $reservation->save();

        // 成功したら予約一覧ページにリダイレクト
        return redirect()->route('reservations.index');
    }

    // 予約一覧ページを表示する
    public function index()
    {

        $admin_id = Auth::guard('admin')->id();

        // ログインしているadminのadmin_idに基づいて予約情報をフィルタリング
        $reservations = Reservation::where('admin_id', $admin_id)
                                   ->orderBy('date', 'asc')
                                   ->get();    
        return view('reservations.index', ['reservations' => $reservations]);

        $reservations = Reservation::with('user')->get();
        return view('index', compact('reservations'));


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
