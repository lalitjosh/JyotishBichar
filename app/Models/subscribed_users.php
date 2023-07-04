<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribed_users extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'subscriptionStatus',
        'device_token', // attriiteattribute added

    ];
}
