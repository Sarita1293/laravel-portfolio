<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeDownload;
use Illuminate\Support\Carbon;
use App\Models\PersonalDetail;

class ResumeController extends Controller
{
    public function download()
    {

        $personalDetail = PersonalDetail::first();

        if (!$personalDetail || !$personalDetail->resume_file) {
            abort(404, 'Resume not found.');
        }

        $userAgent = request()->userAgent();
        $browser = 'Unknown';

        if (str_contains($userAgent, 'Chrome')) {
            $browser = 'Chrome';
        } elseif (str_contains($userAgent, 'Firefox')) {
            $browser = 'Firefox';
        } elseif (str_contains($userAgent, 'Safari')) {
            $browser = 'Safari';
        } elseif (str_contains($userAgent, 'Edge')) {
            $browser = 'Edge';
        }


        $device = str_contains($userAgent, 'Mobile')
                    ? 'Mobile'
                    : 'Desktop';


        $operatingSystem = 'Unknown';

        if (str_contains($userAgent, 'Windows')) {
            $operatingSystem = 'Windows';
        } elseif (str_contains($userAgent, 'Mac')) {
            $operatingSystem = 'MacOS';
        } elseif (str_contains($userAgent, 'Linux')) {
            $operatingSystem = 'Linux';
        }

        ResumeDownload::create([
            'ip_address'        => request()->ip(),
            'user_agent'        => $userAgent,
            'browser'           => $browser,
            'device'            => $device,
            'operating_system'  => $operatingSystem,
            'downloaded_at'     => Carbon::now(),
        ]);

        $path = storage_path('app/public/resume/' . $personalDetail->resume_file);
        return response()->download($path);
        
    }
}
