<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        return request()->user()->only(['name', 'email', 'role']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * , string $id
     */
    public function update(Request $request)
{
    $validated = $request->validate([

        'name' => ['required'],
        'email' => ['required', 'email', Rule::unique('users')->ignore($request->user()->id)],
    ]);

    $request->user()->update($validated);
    return response()->json([
        'success' => true
    ]);
}





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
