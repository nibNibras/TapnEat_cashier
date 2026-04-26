<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($request->only('username', 'password'), $request->remember)){
            return redirect('/dashboard');
        }
        return back()->with('failed', 'Invalid username or password.');
    }
}
