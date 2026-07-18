<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\ResumeDownload;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $projectsCount = Project::count();

        $skillsCount = Skill::count();

        $experienceCount = Experience::count();

        $totalDownloads = ResumeDownload::count();

        $todayDownloads = ResumeDownload::whereDate(
            'downloaded_at',
            Carbon::today()
        )->count();

        $latestDownload = ResumeDownload::latest('downloaded_at')
        ->first();

        $latestDownloads = ResumeDownload::latest('downloaded_at')
        ->take(5)
        ->get();

        // visitors
        $todayVisitors = Visitor::whereDate(
            'created_at',
            Carbon::today()
        )->count();


        $monthlyVisitors = Visitor::whereMonth(
            'created_at',
            Carbon::now()->month
        )
        ->whereYear(
            'created_at',
            Carbon::now()->year
        )
        ->count();


        $totalVisitors = Visitor::count();

        $latestVisitors = Visitor::latest()
                            ->take(10)
                            ->get();


         return view('dashboard', compact(
            'projectsCount',
            'skillsCount',
            'experienceCount',
            'totalDownloads',
            'todayDownloads',
            'latestDownload',
            'latestDownloads',
            'todayVisitors',
            'monthlyVisitors',
            'totalVisitors',
            'latestVisitors'
        ));

    }
}
