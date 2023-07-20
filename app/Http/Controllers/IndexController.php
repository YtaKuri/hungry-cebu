<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');

        return view('posts.search');
    }
    public function search()
    {
        return view('posts.search');
    }
    
    
}
