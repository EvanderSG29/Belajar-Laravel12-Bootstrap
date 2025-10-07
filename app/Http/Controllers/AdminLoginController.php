<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        \Log::info('Admin login attempt', ['credentials' => $credentials]);

        if (Auth::guard('admin')->attempt($credentials)) {
            \Log::info('Admin login successful', ['email' => $credentials['email']]);
            return redirect()->intended('/admin/dashboard');
        }

        \Log::warning('Admin login failed', ['email' => $credentials['email']]);
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $borrows = \App\Models\Borrow::with('user', 'book', 'dataBorrow')->latest()->paginate(10);
        $users = \App\Models\User::latest()->paginate(10);
        $books = \App\Models\Book::latest()->paginate(10);
        $dataUsers = \App\Models\DataUser::latest()->paginate(10);

        return view('admin.dashboard', compact('borrows', 'users', 'books', 'dataUsers'));
    }
}
