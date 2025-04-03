<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|unique:users,username',
            'email' => 'required|string|email:dns|unique:users,email',
            'password' => 'required|string|min:5',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash("success", "Registration successfully!");
        return redirect()->route('login');
    }
}
