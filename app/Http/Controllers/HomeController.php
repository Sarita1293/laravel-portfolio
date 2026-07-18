<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\PersonalDetail;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\FAQ;
use App\Models\Service;
use App\Models\CurrentLearning;

class HomeController extends Controller
{
    public function index()
    {
        //$projects = Project::all(); //Eloquent method
        $projects = Project::with('skills')
                            ->where('status',true)
                            ->orderBy('display_order')
                            ->get();
        $personal = PersonalDetail::first();

        $education = Education::where('status', true)
        ->orderBy('display_order')
        ->get();

        $experiences = Experience::orderBy('display_order')->get();

        $skillCategories = SkillCategory::with([
            'skills' => function ($query) {
                $query->where('status', true)
                    ->orderBy('display_order');
            }
        ])
        ->where('status', true)
        ->orderBy('display_order')
        ->get();

        $faqs = FAQ::where('status', true)
                ->orderBy('display_order')
                ->get();

        $services = Service::where('status', true)
            ->orderBy('display_order')
            ->get();

        $currentLearnings = CurrentLearning::where('status', true)
            ->orderBy('display_order')
            ->get();
        
       return view('home',compact('projects','personal','education','experiences','skillCategories','faqs','services','currentLearnings'));
    }
}
