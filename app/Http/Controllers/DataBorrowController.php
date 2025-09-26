<?php

namespace App\Http\Controllers;

use App\Models\DataBorrow;
use Illuminate\Http\Request;
use App\Http\Requests\DataBorrowStoreRequest;
use App\Http\Requests\DataBorrowUpdateRequest;

class DataBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databorrows = DataBorrow::paginate(10);
        return view('databorrows.index', compact('databorrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('databorrows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DataBorrowStoreRequest $request)
    {
        DataBorrow::create($request->validated());
        return redirect()->route('databorrows.index')->with('success', 'Patron added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBorrow $databorrow)
    {
        return view('databorrows.show', compact('databorrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataBorrow $databorrow)
    {
        return view('databorrows.edit', compact('databorrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DataBorrowUpdateRequest $request, DataBorrow $databorrow)
    {
        $databorrow->update($request->validated());
        return redirect()->route('databorrows.index')->with('success', 'Patron updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataBorrow $databorrow)
    {
        $databorrow->delete();
        return redirect()->route('databorrows.index')->with('success', 'Patron deleted successfully.');
    }
}
