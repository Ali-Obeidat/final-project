<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userBooking extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function clinic(){
        return $this->belongsTo(Clinic::class);
        
    }
    public function user(){
        return $this->belongsTo(User::class);
        
    }
}
