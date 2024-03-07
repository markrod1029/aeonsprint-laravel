<?php

namespace App\Http\Controllers\admin;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enums\AppointmentStatus;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $appointmets = Appointment::latest()->get();
        // return $appointmets;
        // return Appointment::with('client:id,first_name,last_name')->latest()->paginate();

        return Appointment::query()
        ->with('client:id,first_name,last_name')
        ->when(request('status'), function($query) {
            return $query->where('status', AppointmentStatus::from(request('status')));
        } )

        ->latest()
        ->paginate()
        ->through(fn ($appointmet) => [
            'id' => $appointmet->id,
            // date Format
            'start_time' => $appointmet->start_time->format('Y-m-d h:i A'),
            'end_time' => $appointmet->end_time->format('Y-m-d h:i A'),
            
            // color and status
            'status' =>[
                'name' => $appointmet->status->name,
                'color' => $appointmet->status->color(),
            ],
            'client' => $appointmet->client
        ]);

        
    
        
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
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
