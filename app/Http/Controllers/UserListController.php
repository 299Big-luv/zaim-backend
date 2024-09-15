<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function list(Request $request)
    {
        $users = User::all();
        $user_names = $users->name;
        return response()->json($user_names);
    }
}
