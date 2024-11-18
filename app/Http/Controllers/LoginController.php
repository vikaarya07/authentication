<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $remember = $request->has('remember');

        $user = User::where('username', $request->username)->first();



        if ($user && Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/')->with('success', 'Login Successfully!');
        } elseif (!$user) {
            return redirect()->back()->with('error', 'User Not Found!');
        } else {
            return redirect()->back()->with('error', 'Login Failed!');
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
