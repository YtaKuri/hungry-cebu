<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            // ユーザーがログインしている場合は、リクエストを次のミドルウェアに進める
            return $next($request);
        } else {
            // ユーザーがログインしていない場合は、ログインページにリダイレクト
            return redirect('admin/login');
        }
    }
}
