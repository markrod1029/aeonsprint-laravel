<?php

namespace App\Http\Controllers\admin;


use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function index() {

        $services = Service::latest()->get();

        return $services;  
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

    // public function store(){
    public function store(Request $request){

        return Service::create([
            'name' => request('name'),
        ]);
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
     * 
     */
    public function edit(string $id)
    {
        //
     
    }

    /**
     * Update the specified resource in storage.
     * Request $request, string $id
     */
    public function update(Service $service)
    {
        //
        $service->update([
            'name' => request('name'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * string $id
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();

        return response()->noContent();

    }
}

