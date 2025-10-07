<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $dataUsers = DataUser::with('user')->paginate(10);
        return view('datausers.index', compact('dataUsers'));
    }

    public function create()
    {
        return view('datausers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'student_id' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
        ]);

        DataUser::create($validated);
        return redirect()->route('datausers.index')->with('success', 'Data User created successfully.');
    }

    public function show(DataUser $dataUser)
    {
        return view('datausers.show', compact('dataUser'));
    }

    public function edit(DataUser $dataUser)
    {
        return view('datausers.edit', compact('dataUser'));
    }

    public function update(Request $request, DataUser $dataUser)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'student_id' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
        ]);

        $dataUser->update($validated);
        return redirect()->route('datausers.index')->with('success', 'Data User updated successfully.');
    }

    public function destroy(DataUser $dataUser)
    {
        $dataUser->delete();
        return redirect()->route('datausers.index')->with('success', 'Data User deleted successfully.');
    }
}
