<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'officer') {
                return redirect()->intended(route('officer.dashboard'));
            } elseif ($user->role === 'user') {
                return redirect()->intended(route('user.history'));
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function history()
    {
        $borrows = Auth::user()->borrows()->with('book')->latest()->paginate(10);
        return view('user.history', compact('borrows'));
    }
}
