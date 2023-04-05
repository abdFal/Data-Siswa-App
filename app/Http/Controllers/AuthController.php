<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('auth.login');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect('login')->with('error_msg', 'Wrong email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('login')->with('log_msg', 'You have successfully logged out. Please login again.');
    }

    public function register_form()
    {
        if (Auth::check()) {
            return redirect('login');
        } else {
            return view('auth.signup');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4|max:28',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:4',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z]).+$/'
            ],
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('login')->with('success_msg', 'Sign Up Success, Please login to continue');
    }
}
