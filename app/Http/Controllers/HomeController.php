<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->role == 0) {
                $borrows = $user->borrows()->with('book')->latest()->paginate(10);
                return view('user.index', compact('borrows'));
            } elseif ($user->role == 2) {
                return view('admin.dashboard');
            } elseif ($user->role == 1) {
                return view('staff.dashboard'); // if staff added later
            } else {
                return view('error');
            }
        } else {
            return view('auth.userlogin');
        }
    }
}
