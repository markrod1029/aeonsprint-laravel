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
        $validated = $request->validate([
            'client_id' => 'required', 
            'title' => 'required', 
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ],
    [
        'client_id.required' => 'The Client field is required'
    ]);
    
        Appointment::create([
            'title' => $validated['title'], 
            'client_id' =>  $validated['client_id'],
            'start_time' => $validated['start_time'],
            'end_time' =>  $validated['end_time'],
            'description' => $validated['description'],
            'status' => AppointmentStatus::SCHEDULED,
            
        ]);
    
        return response()->json(['message' => 'success']);
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
     * string $id,
     */
    public function edit(Appointment $appointment)
    {
        //
        return  $appointment;
       
    }

    /**
     * Update the specified resource in storage.
     * 
     * Request $request, string $id
     */
    public function update(Appointment $appointment)
    {
        //

        $validated = request()->validate([
            'client_id' => 'required', 
            'title' => 'required', 
            'description' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ],
    [
        'client_id.required' => 'The Client field is required'
    ]);

    $appointment->update($validated);

    return response()->json(['success' => true]);
    

    }

    /**
     * Remove the specified resource from storage.
     * string $id
     */
    public function destroy(Appointment $appointment)
    {
        //
        $appointment->delete();
        
        return response()->json(['success' => true]);

    }
}
