<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadgeApplication extends Model
{
    use HasFactory;

    protected $table="badge_applications";

    protected $fillable = [
        'user_id',
        'website_url',
        'expiry_date',
        'type',
    ];
}
