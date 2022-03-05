<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function SubCategories(){
        return $this->hasMany(SubCategory::class);
        
    }
    public function clinics(){
        return $this->hasMany(Clinic::class);
        
    }
}
