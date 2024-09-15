<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  // ユーザーのセッションを再生成して、セッション固定攻撃を防ぐ
            return response()->json(Auth::user(), 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
