<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']); //dont need auth
    }

    /**
     * Auth user
     */
    public function login(LoginRequest $request)
    {
        
        if (!auth()->guard()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }
    }
}
