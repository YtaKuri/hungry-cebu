<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class SearchController extends Controller
{
    //// 検索フォームを表示するアクション
    public function showSearchForm()
    {
        return view('search-form');
    }

    // // 検索結果を表示するアクション
    // public function search(Request $request)
    // {
    //     $keyword = $request->input('search');
    //     $stores = Admin::where(function($query) use ($keyword) {
    //         $query->where('name', 'LIKE', "%{$keyword}%");
    //     })->orderBy('created_at', 'asc')->paginate(8);

    //     return view('search-results', compact('stores'));
    // }
        public function search(Request $request)
    {
        $keyword = $request->query('search');
        $stores = Admin::where(function($query) use ($keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        })->orderBy('created_at', 'asc')->paginate(8);

        return view('search-results', compact('stores'));
    }
}
