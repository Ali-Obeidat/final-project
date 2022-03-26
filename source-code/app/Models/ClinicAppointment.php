<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicAppointment extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function clinics(){
        return $this->belongsToMany(Clinic::class);
        
    }

    public function setScheduleDataAttribute($value)
    {
        $this->attributes['schedule_data'] = json_encode($value);
    }

    public function getScheduleDataAttribute($value)
    {
        return $this->attributes[0]['schedule_data'] = json_decode($value);
    }
}
