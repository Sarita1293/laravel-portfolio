<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'visitor_token',
        'ip_address',
        'user_agent',
        'browser',
        'device',
        'page'
    ];
}
