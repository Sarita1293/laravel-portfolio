<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [        

        'company_name',

        'designation',

        'project_name',

        'start_date',

        'end_date',

        'description',

        'roles_and_responsibilities',

        'currently_working',

        'location',

        'display_order',

        'status'
    ];
}
