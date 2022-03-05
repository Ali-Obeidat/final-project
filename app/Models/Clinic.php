<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function admins(){
        return $this->belongsToMany(Admin::class);
        
    }
    public function category(){
        return $this->hasOne(Category::class);
        
    }
    public function clinicAppointment(){
        return $this->hasMany(ClinicAppointment::class);
        
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
        
    }
    public function userBookings(){
        return $this->hasMany(userBooking::class);
        
    }
    public function reviews(){
        return $this->hasMany(Review::class);
        
    }
    public function gallery(){
        return $this->hasOne(Gallery::class);
        
    }
    public function SubCategories(){
        return $this->belongsToMany(SubCategory::class);
        
    }
}
