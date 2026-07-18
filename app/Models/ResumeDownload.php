<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeDownload extends Model
{
    protected $fillable = [
        'ip_address',
        'user_agent',
        'downloaded_at',
        'browser',
        'device',
        'operating_system',
    ];

    protected function casts(): array
    {
        return [
            'downloaded_at' => 'datetime',
        ];
    }
}
