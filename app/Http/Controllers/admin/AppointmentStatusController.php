<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\AppointmentStatus;
use App\Models\Appointment;

class AppointmentStatusController extends Controller
{
    //
    public function getStatusWithCount() {
        
        
        $cases = AppointmentStatus::cases();
        return collect($cases)->map(function ($status) {

            return [
                'name' => $status->name,
                'value' => $status->value,
                'count' => Appointment::where('status', $status->value)->count(),
                'color' => AppointmentStatus::from($status->value)->color(),
            ];
        });

     
    }
}
