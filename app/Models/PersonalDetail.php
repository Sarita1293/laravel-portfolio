<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $fillable = [

    'name',
    'title',
    'mobile',
    'email',
    'address',
    'years_of_experience',
    'profile_image',
    'resume_file',
    'linkedin_url',
    'github_url',
    
    ];
}
