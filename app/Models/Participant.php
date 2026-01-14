<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = "participants";
    protected $fillable = ['brand_logo', 'brand_name', 'slug', 'brand_id', 'event_id', 'year'];

    // public function Sponser()
    // {
    //     return $this->belongsTo(Participant::class);
    // }

    public function sponser()
    {
        return $this->belongsTo(Sponsership::class, 'sponsership_id');
    }
}
