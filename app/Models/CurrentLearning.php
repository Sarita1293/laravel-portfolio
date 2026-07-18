<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentLearning extends Model
{
    protected $fillable = [

        'logo',
        'title',
        'description',
        'display_order',
        'status',
    ];
}
