<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('posts.index');

    }

    public function search()
    {
        return view('posts.search');

    }

    // public function showAdminProfile($adiminId)
    // {
    // $admin = Admin::find($adminId);

    // return view('admin.profile', compact('admin'));
    // }
}
