<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [

        'course',
        'university',
        'years',
        'description',
        'display_order',
        'status'

    ];
}
