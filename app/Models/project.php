<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [

        'title',

        'short_description',

        'description',

        'project_date',

        'role',

        'github_url',

        'live_url',

        'thumbnail_image',

        'display_order',

        'status'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
