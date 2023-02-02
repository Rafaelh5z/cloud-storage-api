<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        auth()->guard()->logout();
    }
}
