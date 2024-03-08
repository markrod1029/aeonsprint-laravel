<?php

namespace App\Models;

use App\Models\Client;
use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $appends = ['formatted_start_time', 'formatted_end_time'];
    
    // protected $fillable = [
        
    //     'title',
    //     'client_id',
    //     'start_time',
    //     'end_time',
    //     'description',
    //     'status',
    // ];


    protected $casts =  [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'status' => AppointmentStatus::class,
    ];
    // Define relationship with Client model
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    

    public function formattedStartTime(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->start_time->format('Y-m-d h:i A'),
        );
    }

    public function formattedEndTime(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->end_time->format('Y-m-d h:i A'),
        );
    }

}

