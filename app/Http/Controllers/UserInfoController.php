<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    public function info()
    {
        $info = User::find(Auth::id());
        return response()->json([
            'id' => $info->id,
            'name' => $info->name
        ]);
    }
}
