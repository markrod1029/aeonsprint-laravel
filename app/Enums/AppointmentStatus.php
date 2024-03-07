<?php

namespace App\Enums;

enum AppointmentStatus: int

{
    case SCHEDULED = 1;
    case CONFIRM = 2;
    case CANCEL = 3;

    
    public function color(): string
    {
        return match($this) {

            AppointmentStatus::SCHEDULED => 'primary',
            AppointmentStatus::CONFIRM => 'success',
            AppointmentStatus::CANCEL => 'danger',
        };
    }


}
