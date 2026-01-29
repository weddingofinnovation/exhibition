<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "events";

     public function durationDays()
    {
        return Carbon::parse($this->start_date)
            ->diffInDays(Carbon::parse($this->end_date)) + 1;
    }

    public function dayToDate($day)
    {
        return Carbon::parse($this->start_date)
            ->addDays($day - 1);
    }
    
    public function category()
    {
    return $this->belongsTo(Category::class,'category_id');
    }

    public function sector()
    {
    return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function search()
    {
    return $this->belongsTo(Expo::class, 'search_id');
    }

    public function expo()
    {
    return $this->belongsTo(Expo::class, 'expo_id');
    }

    public function rate()
    {
    return $this->belongsTo(Rate::class, 'event_id');
    }

   
   
}
