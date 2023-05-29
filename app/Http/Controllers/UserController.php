<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function authenticate(Request $request) {
        $user = User::where('user_id', '=', $request->user_id)
                        ->where('password', '=', $request->password)
                        ->first();
        return ['user' => $user];
    }
}
