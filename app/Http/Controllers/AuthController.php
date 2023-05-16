<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\admin_user;



class AuthController extends Controller
{
    protected string $table = 'admin_users';

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful...
            return redirect('/dashboard');
        }

        // Authentication failed...
        return redirect('/login')->withErrors([
            'username' => 'These credentials do not match our records.',
        ]);
    }

}
