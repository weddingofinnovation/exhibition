<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'floorplan_id', 'name', 'coordinates', 'capacity', 'amenities', 'pricing'
    // ];

    // protected $casts = [
    //     'coordinates' => 'array',
    //     'amenities' => 'array',
    // ];

    // public function floorPlan()
    // {
    //     return $this->belongsTo(Floorplan::class);
    // }

}
