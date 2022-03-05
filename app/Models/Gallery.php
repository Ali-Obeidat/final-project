<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function clinics(){
        return $this->belongsTo(Clinic::class);
        
    }
}
