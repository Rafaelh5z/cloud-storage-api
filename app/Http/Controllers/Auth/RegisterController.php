<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']); //dont need auth
    }

    /**
     * Validate data and create a new user
     */
    public function register(RegisterRequest $request)
    {

        //Create the user in db
        User::create([
            "name"      => $request->name,
            "email"     => $request->email,
            "password"  => bcrypt($request->password)
        ]);

    }
}
